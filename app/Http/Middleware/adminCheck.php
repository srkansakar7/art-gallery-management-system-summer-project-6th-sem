<?php

namespace App\Http\Middleware;
use Session;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class adminCheck
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
        if ( $request->user() ){
            // user is logged in
            $userId=Session::get('user')['admin'];
            if($userId="ADMIN"){
                return redirect('admincontrol');
        } else {
            // user is not logged in
            return "No access";
            
        }
        
        }
        return $next($request);
    }
}
