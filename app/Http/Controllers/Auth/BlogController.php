<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\BlogPhoto;
use App\BlogsComment;
use App\BlogAnswer;
use App\Photo;

use Auth;
use Image;
use File;

class BlogController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }

    public function index(Request $request) {

        $noticias = Blog::search($request->name)
            ->orderBy('id','desc')
            ->paginate(15);

        return view('admin/blog/list')->with(['noticias'=> $noticias]);
    }

    public function create() {
        return view('admin/blog/create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
             'resume' => 'required',
             'date' => 'required',
             'description' => 'required',            
             'img' => 'required|image'
 
        ]);
 
        ini_set('memory_limit','256M');

        $img = $request->file('img');
        $file_route = time().'_'. $img->getClientOriginalName();

        $blog = new Blog();

        $blog->title = $request->title;
        $blog->resume = $request->resume;
        $blog->date = $request->date;
        $blog->description = $request->description;
        $blog->youtube = $request->youtube;
        $blog->img = $file_route;
        $blog->creator_id = Auth::id();
        $blog->save();

        File::makeDirectory('img/app/blog/' . $blog->id);

        Image::make($request->file('img'))
        ->fit(900,600)
        ->save("img/app/blog/" . $blog->id . '/' . $file_route);

        return redirect('/app/blog');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);          
        return view('admin/blog/edit')->with(['blog'=> $blog]);
    }

    public function update($id, Request $request) {

        $this->validate($request, [
            'title' => 'required',
             'resume' => 'required',
             'date' => 'required',
             'description' => 'required',
        ]);

        $blog = Blog::find($id);  
        
        if($request->file('img')) {
            ini_set('memory_limit','256M');
            $img = $request->file('img');
            $file_route = time().'_'. $img->getClientOriginalName();



            Image::make($request->file('img'))
                  ->fit(900,600)
                  ->save('img/app/blog/' . $id . '/' . $file_route);

            File::delete('img/app/blog/' . $id . '/' .$blog->img);

            $blog->img = $file_route;

        }
        
        $blog->title = $request->title;
        $blog->resume = $request->resume;
        $blog->date = $request->date;
        $blog->description = $request->description;
        $blog->youtube = $request->youtube;
        $blog->save();

        return redirect('/app/blog/update/'.$blog->id);
    }

    public function destroy(Request $request) {
        $id =  $request->id;
        $n = Blog::find($id);
        BlogPhoto::where('blog_id', $n->id)->delete();
        $comments = BlogComment::where('blog_id', $n->id)->get();

        foreach($comments as $comment) {
            BlogAnswer::where('blog_comment_id', $comment->id)->delete();
        }

        BlogComment::where('blog_id', $n->id)->delete();

        File::deleteDirectory('img/app/blog/' . $n->id);
        $n->delete();
        return 'true';
    }

    public function uploadPhotoView ($id) {        
        $blog = Blog::find($id);          
        if($blog == NULL ) return 'BLOG INEXISTENTE';

        return view('admin/blog/uploadPhotos')->with(['blog'=> $blog]);
    }

    public function storePhoto(Request $request, $id) {
        
        $this->validate($request, [
            'image' => 'required|image'
        ]);

        $img = $request->file('image');

        //Verify Process uNIQUE FOR ALBUM
        $verify = Photo::where([
                    ['img', $img->getClientOriginalName() ],
                    ['foreign_id', $id ],
                    ['type', 1]
                    ])->first();

        if(isset($verify->id))  return response()->json(['error' => 'File Duplicate'], 403);

        ini_set('memory_limit', '420M');
        $file_route = $img->getClientOriginalName();
        $image = Image::make($img);

        if ($image->width() >= $image->height() && $image->width() < 1000) {            

            $image->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

        } else  if ($image->width() < $image->height() && $image->height() < 1000) {

            $image->resize(null, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

        } 
        
        $image->save('img/app/blog/' . $id .'/' . $file_route);       

        $photo = new Photo();
        $photo->foreign_id = $id;
        $photo->img = $file_route;
        $photo->type = 1;
        $photo->save();

        return response()->json($photo);

    }

    public function deletePhoto(Request $request, $id) {
        Photo::find($request->id)->delete();
        File::delete('img/app/blog/' . $id . '/' . $request->img);
        return response()->json(true);
    }


}
