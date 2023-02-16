<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class EmployeeAuth
{
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('EMP_LOGIN')){
            #
        }else{
            $request->session()->flash('error', 'Access Denied');
            return redirect('/');
        }
        return $next($request);
    }
}

