<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
