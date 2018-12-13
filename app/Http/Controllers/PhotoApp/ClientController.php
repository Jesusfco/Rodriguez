<?php

namespace App\Http\Controllers\PhotoApp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Work;
use App\Photo;
use App\User;
use Auth;

class ClientController extends Controller
{

    public function login(Request $request){        

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) { 
            $user = Auth::user();
        
            return response()->json([
                                'token' => $user->id,
                                'user' => $user,
                                ]);
        } else {

            return response()->json([
                'error' => 'Credenciales Invalidas'
            ], 401);

        }

       
        
    }

    public function checkAuth(Request $re) {
        
        $user = User::find($re->token);
        if($user == NULL) 
        return response()->json([
            'error' => 'Credenciales Invalidas'
        ], 402);

        return response()->json(['user' => $user]);

    }

    public function getAlbums(Request $re){

        
        $works = Work::where('user_id', $re->token)->orderBy('created_at','desc')->get();
        return response()->json($works);

    }

    public function getPhotos($id) {
        $work = Work::find($id);
       
        if($work != null)
            return response()->json([ 'photos' => $work->photos(), 'album' => $work]);
            

        

        return response()->json(['error' => 'Album Invalid'], 402);

    }

    public function storeSelection(Request $request) {

        $photos = $request->photos;

        Photo::where([['foreign_id', $request->album_id] , ['type', 2]])->update(['select' => 0]);

        foreach($photos as $photo) {

            $photo = json_decode(json_encode($photo), FALSE);

            if($photo->select == true) {
                $p = Photo::find($photo->id);
                $p->select = $photo->select;
                $p->save();
            }
            
        }        

        return response()->json('Seleccion Guardada');
        

    }
    
}
