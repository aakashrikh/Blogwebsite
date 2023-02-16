<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            return $next($request);
        }else{
            $request->session()->flash('error', 'Access Denied');
           
            return redirect('/');
        }
        
    }
}
