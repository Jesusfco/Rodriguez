<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Work;
use App\WorksPart;
use App\Photo;
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

    public function edit($id) {
        $work = Work::find($id);      
        if($work == NULL)     return 'El Trabajo no existe';
        return view('admin/works/edit')->with(['work'=> $work]);
    }

    public function workParts($id) {
        $work = Work::find($id);      
            if($work == NULL)  return 'El Trabajo no existe';
        
        return view('admin/works/workParts')->with(['work'=> $work]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'resume' => 'required',
            'cost' => 'required',                                  
        ]);        

        $work = new Work();        
        $work->user_id = $request->client_id;
        $work->creator_id = Auth::id();
        $work->service_id = $request->service_id;
        $work->work_status_id = $request->status;
        $work->title = $request->title;
        $work->resume = $request->resume;        
        $work->description = $request->description;
        $work->cost = $request->cost;
        $work->youtube = $request->youtube;
        $work->public = $request->public;
        $work->link = $request->link;                      
        if($work->service_id == 3)        
            $work->photos_quantity = $request->photos_quantity;                      
                    
        $work->save();

        $part = new WorksPart();
        $part->work_id = $work->id;
        $part->title = 'PROPUESTA INICIAL';
        $part->cost = $request->cost;
        $part->status = $request->status;
        $part->save();

        File::makeDirectory('img/app/works/' . $work->id);

        if($request->file('img') != NULL)
            $this->saveImage($work, $request->file('img'));                     

        return redirect('/app/works');

    }

    public function update($id, Request $request) {

        $work = Work::find($id);      
        if($work == NULL)     return 'El Trabajo no existe';

        $work->user_id = $request->client_id;
        $work->creator_id = Auth::id();
        $work->service_id = $request->service_id;
        $work->work_status_id = $request->status;
        $work->title = $request->title;
        $work->resume = $request->resume;        
        $work->description = $request->description;        
        $work->youtube = $request->youtube;
        $work->public = $request->public;
        $work->link = $request->link;                  

        //SERVICIO DE FOTOGRAFIA
        if($work->service_id == 3)        
            $work->photos_quantity = $request->photos_quantity;   

        if($request->file('img') != NULL)
            $this->saveImage($work, $request->file('img'));                     
                    
        $work->save();

        return back()->with('msj', 'Actualizado Correctamente');

    }    

    public function getParts($id) {
        return response()->json(Work::find($id)->parts);
    }

    public function storePart($id, Request $re) {
        $part = new WorksPart();
        $part->work_id = $id;
        $part->title = $re->title;
        $part->description = $re->description;
        $part->cost = $re->cost;
        $part->status = $re->status;
        $part->save();

        return response()->json($part);
    }

    public function updatePart($id, Request $re) {
        $part = WorksPart::find($re->id);        
        $part->title = $re->title;
        $part->description = $re->description;
        $part->cost = $re->cost;
        $part->status = $re->status;
        $part->save();

        return response()->json($part);
    }

    public function deletePart($id, Request $re) {
        WorksPart::find($re->id)->delete();                
        return response()->json(true);
    }

    public function saveImage (Work $work, $img) {

        ini_set('memory_limit','256M');        

        if($work->img != NULL) {
            File::delete('img/app/works/'. $work->id . '/'. $work->img);
        }

        $work->img = $work->id . '.' . $img->getClientOriginalExtension();

        $image = Image::make($img);    
        $image->fit(900, 600);
        $image->save('img/app/works/'. $work->id . '/'. $work->img);

        $work->save();

    }

    public function sugestWork(Request $re) {

        return response()->json(
            
            Work::where([
                ['title', 'LIKE', '%'. $re->term . '%'],                
            ])->limit(10)->get()

        );
    }

    public function getPhotos($id) {
        return response()->json(Photo::where([
			['foreign_id', $id],
			['type', 2]
			])->get());
    }

    public function uploadPhotoView ($id) {        
        $work = Work::find($id);          
        if($work == NULL ) return 'BLOG INEXISTENTE';

        return view('admin/works/uploadPhotos')->with(['work'=> $work]);
    }

    public function storePhoto(Request $request, $id) {
        
        $this->validate($request, [
            'image' => 'required|image'
        ]);

        $img = $request->file('image');
        $mark = $request->mark;

        // verificar nombre unico dentro de ese album
        $verify = Photo::where([
                    ['img', $img->getClientOriginalName() ],
                    ['foreign_id', $id ],
                    ['type', 2]
                    ])->first();

        if($verify != NULL)  return response()->json(['error' => 'File Duplicate'], 403);

        ini_set('memory_limit', '420M');
        $file_route = $img->getClientOriginalName();
        $image = Image::make($img);
        $work = Work::find($id);

        if($work->service_id == 3) {

            if ($image->width() >= $image->height() && $image->width() > 800) {            

                $image->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });                        
    
            } else  if ($image->width() < $image->height() && $image->height() > 800) {
    
                $image->resize(null, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                
            } 
            
        } else {
            if ($image->width() >= $image->height() && $image->width() > 1000) {            

                $image->resize(1000, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });                        
    
            } else  if ($image->width() < $image->height() && $image->height() > 1000) {
    
                $image->resize(null, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                
            } 
        }
        
        
        $image->save('img/app/works/' . $id .'/' . $file_route);

        $photo = new Photo();
        $photo->foreign_id = $id;
        $photo->img = $file_route;
        $photo->type = 2;
        $photo->save();

        return response()->json($photo);

    }

    public function deletePhoto(Request $request, $id) {
        Photo::find($request->id)->delete();
        File::delete('img/app/works/' . $id . '/' . $request->img);
        return response()->json(true);
    }

}
