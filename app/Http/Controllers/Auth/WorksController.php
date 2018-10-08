<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Work;
use App\WorksPart;
use Image;
use Auth;
use File;

class WorksController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }

    public function list(Request $request) {

        $works = Work::search($request->name)
            ->orderBy('id','desc')
            ->paginate(15);

        return view('admin/works/list')->with(['works'=> $works]);

    }

    public function create() {
        return view('admin/works/create');
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
}
