<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use App\Mail\AmerigasMail;
use Auth;
use Session;

class VisitorController extends Controller
{

	public function __construct() {		

		if(Session::get('visited') == 1){
			Session::put('visited', 2);
		} else {
			Session::put('visited',2);
		}

		Session::put('visited', 'PINCHE CARA DE NALGA');
    }

	public function index(){
		echo Session::get('visited');
		return;
		return view('visitor/home');
		
	}

	public function eng(){
		
		return view('visitor/eng');
		
	}

	public function mail(){
		
			Mail::send(new ContactMail());

			return 'Mail enviado || SERVIDOR';
			// Mail::send(['text' => 'mail'], ['name', 'JESUS RODRIGUEZ'], function($message){
			// 	$message->to('jfcr@live.com', 'TO Bitfumes')->subject('TEST EMAIL');
			// 	$message->from('rodriguez@amerigas.mx', 'Rodriguez');

			// 	$message->to('rodriguez@amerigas.mx', 'TO Bitfumes')->subject('TEST EMAIL');
			// 	$message->from('rodriguez@amerigas.mx', 'Rodriguez');
			// });
	}
	
	public function blog() {
		
	}

	public function test(Request $request){
			$request->text= 'hola';
			$request->name = 'DANIELA';
			$request->mail = 'daniela@gmail.com';
		Mail::send(new ContactMail());

			return 'Mail enviado || SERVIDOR';
	}

	public function login() {

		if(Auth::check()) {
			return redirect('app');
		}
		return view('visitor/login')->with('visited', true);
	}

	

	public function signin(Request $request)
    {        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]) ) {

            return redirect('/app');

        }

        return back();
    }
    
}
