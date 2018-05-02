<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use App\Mail\AmerigasMail;

class VisitorController extends Controller
{

	public function index(){
		session_start();
		if(isset($_SESSION["newsession"]))
				return view('visitor/home')->with('visited', true);
		else {
			$_SESSION["newsession"] = true;
			return view('visitor/home')->with('visited', false);
		}
	}

	public function eng(){
		session_start();
		if(isset($_SESSION["newsession"]))
				return view('visitor/eng')->with('visited', true);
		else {
			$_SESSION["newsession"] = true;
			return view('visitor/eng')->with('visited', false);
		}
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

	public function amerigasContact(){
		Mail::send(new AmerigasMail());
		return response()->json(true);
	}

	public function test(Request $request){
			$request->text= 'hola';
			$request->name = 'DANIELA';
			$request->mail = 'daniela@gmail.com';
		Mail::send(new ContactMail());

			return 'Mail enviado || SERVIDOR';
	}
    
}
