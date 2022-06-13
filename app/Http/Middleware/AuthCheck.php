<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(session()->has('LoggedUser'));
    if(!session()->has('LoggedUser') && (request()->path() !=='login')){

        // dd(session('LoggedUser'));
        return redirect('user/index');
    }

    if(session()->has('LoggedUser') && (request()->path() =='login')){

        // session()->pull('LoggedUser');
        // dd(session());

        if(session('LoggedUser')['role_id']=='1'){

        return redirect()->route('adminhome');
        }
        elseif(session('LoggedUser')['role_id']=='2'){

            return redirect()->route('dochome');
            }
    }
    

        return $next($request);
       
}
}
