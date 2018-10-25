<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use App\Mail\AmerigasMail;
use App\Blog;
use App\Service;
use App\BlogComment;
use App\BlogAnswer;
use App\Work;
use Auth;
use Session;

class VisitorController extends Controller
{

	public function __construct() {		

		if(Session::get('visited') == 1 || Session::get('visited') == 2){
			Session::put('visited', 2);
		} else {
			Session::put('visited', 1);
		}

	}	
	
	public function index() {
		
		return view('visitor/home');
		
	}

	public function eng(){
		
		return view('visitor/eng');
		
	}

	public function quienSoy(){
		return view('visitor/quien');
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

	public function portafolio() {
		$works = Work::where('public', true)->get();
		return view('visitor/portafolio')->with('works', $works);
	}

	public function work($id) {
		$work = Work::find($id);
		if($work == NULL || $work->public == false) return 'Trabajo no disponible';
		return view('visitor/work')->with('work', $work);
	}

	public function services() {
		$services = Service::where('public', true)->get();
		return view('visitor/services')->with('services', $services);
	}

	public function blogs() {
		$blogs = Blog::orderBy('date', 'DESC')->paginate(9);
		return view('visitor/blogs')->with('blogs', $blogs);
	}

	
	public function blog($id) {
		$blog = Blog::find($id);
		if($blog == NULL) return 'Articulo inexistente';
		return view('visitor/blog')->with('blog', $blog);
	}

	public function service($name) {
		$service = Service::where('name', 'LIKE', $name)->first();
		if($service == NULL) return 'Servicio inexistente';		
		return view('visitor/service')->with('service', $service);
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
		return view('visitor/login');
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
	
	public function logout(){
		if(Auth::check()) {
			Auth::logout();
			return redirect('login');
		}

		return redirect('login');
	}
}
