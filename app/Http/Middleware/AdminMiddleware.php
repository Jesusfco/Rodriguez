<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */    

    public function handle($request, Closure $next)
    {
        if(!Auth::check()) {
            return redirect('login');
        } else if(Auth::user()->type < 10) {
            return back();
        }
        return $next($request);
    }
}
