<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class VisitorController extends Controller
{

	public function index(){
		session_start();
		if(isset($_SESSION["newsession"]))
				return view('welcome')->with('visited', true);
		else {
			$_SESSION["newsession"] = true;
			return view('welcome')->with('visited', false);
		}
	}

	public function mail(){
		// return 'holi';
			Mail::send(new ContactMail());

			return 'Mail enviado || SERVIDOR';
			// Mail::send(['text' => 'mail'], ['name', 'JESUS RODRIGUEZ'], function($message){
			// 	$message->to('jfcr@live.com', 'TO Bitfumes')->subject('TEST EMAIL');
			// 	$message->from('rodriguez@amerigas.mx', 'Rodriguez');

			// 	$message->to('rodriguez@amerigas.mx', 'TO Bitfumes')->subject('TEST EMAIL');
			// 	$message->from('rodriguez@amerigas.mx', 'Rodriguez');
			// });
	}
    
}
