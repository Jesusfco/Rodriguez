<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Auth;
use Image;
use File;

class ServicesController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }
    
    public function list(Request $request) {
        $services = Service::all();
        return view('admin/services/list')->with(['services'=> $services]);
    }

    public function create() {
        return view('admin/services/create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|unique:services',
            'resume' => 'required',                         
            'img' => 'required|image',
        ]);
 
        $service = new Service();
        $service->name = $this->upper($request->name);
        $service->resume = $request->resume;
        $service->description = $request->description;
        $service->youtube = $request->youtube;   
        $service->public = $request->public;        
        $service->save();

        if($request->file('img') != NULL)
            $this->saveImage($service, $request->file('img'));        

        return redirect('/app/services')->with('msj', 'Usuario Creado');

    }

    public function edit($id) {
        $service = Service::find($id);
        if($service == NULL) return 'Servicio Inexistente';
        return view('admin/services/edit')->with('service', $service);
    }

    public function update($id, Request $request) {

        $service = Service::find($id);

        if($service == NULL) return 'Servicio Inexistente';

        $service->name = $this->upper($request->name);
        $service->resume = $request->resume;
        $service->description = $request->description;
        $service->youtube = $request->youtube;   
        $service->public = $request->public;             
        $service->save();

        if($request->file('img') != NULL)
            $this->saveImage($service, $request->file('img'));              

        return back()->with('msj', 'Servicio Actualizado');

    }

    public function saveImage (Service $service, $img) {

        ini_set('memory_limit','256M');

        if($service->img != NULL) {
            File::delete('img/app/services/' . $service->img);
        }

        $service->img = $service->id . '.' . $img->getClientOriginalExtension();

        $image = Image::make($img);    
        $image->fit(900, 600);
        $image->save('img/app/services/' . $service->img);

        $service->save();

    }

    public function upper($string) {
        // $string =  strtr($string, "ÁÉÍÓÚ", "áéíóú");
        // $string = strtolower($string);
        // $string = ucwords($string);
        $string = strtoupper($string);
        $string =  strtr($string, "áéíóú", "ÁÉÍÓÚ");
        return $string;
    }
}
