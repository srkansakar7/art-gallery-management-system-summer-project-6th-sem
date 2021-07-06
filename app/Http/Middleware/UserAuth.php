<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->path()=="CustomerLogin" && $request->session()->has('user') || $request->path()=="register" && $request->session()->has('user') 
            || $request->path()=="admincontrol" && $request->session()->has('user') || $request->path()=="AdminLogin" && $request->session()->has('user')
            || $request->path()=="list" && $request->session()->has('user'))
        {
            return redirect('OurGallery');
        }
        return $next($request);
    }
}
