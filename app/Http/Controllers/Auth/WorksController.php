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
}
