<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AccessLevel
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
        if(Auth::user()->hasAnyRole('System Admin')){
            return $next($request);   
        }
        if(Auth::user()->hasRole($role)){
            return $next($request);   
        }
        return redirect('home');
    }
    ///After this go to Kernel and add routheMiddleware AccessLevel
}
