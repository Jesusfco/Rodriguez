<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function homeApp() {

        if (Auth::check()) {

            return view('admin/home');

        }

        return back();

    }

    public function resetPassword(){
        return view('auth/passwords/email');
    }

    public function sentTokenReset(Request $request) {

        
        $user = User::where('email', 'LIKE', $request->email)->first();        

        if(isset($user->id)){

            $reset = new Reset();
            $reset->user_id = $user->id;
            $reset->token = hash('tiger192,3', rand(1000, 10000));
            $reset->save();

            $data = array(
                'token' => $reset->token,
                'email' => $user->email,
                'name' => $user->name
            );

            
            $request->token = $reset->token;
            $request->email = $user->email;
            $request->email = $user->email;

            $data = (object) $data;

            Mail::send(new ResetMail($data));

            Session::flash('success', 'asdf');
            return back();

        } else {

            Session::flash('errorEmail', 'asdf');
            return back();

        }
    }

    public function resetPassword2($token){

        $reset = Reset::where('token', 'LIKE', $token)->first();

        if(isset($reset->id)){

            $user = User::find($reset->user_id);
            return view('auth/passwords/reset')->with('email', $user->email);

        } else {

            return redirect('login');

        }

    }

    public function updatePassword($token, Request $re){

        $reset = Reset::where('token', 'LIKE', $token)->first();
        
        if(isset($reset->id)){
            $user = User::find($reset->user_id);
            $user->password =  bcrypt($re->password);
            $user->save();

            Auth::login($user);
            $reset->delete();
            
        } 
          
        return redirect('login');
        
    }
}
