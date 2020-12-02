<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

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
        
        if (Auth::check() && Auth::user()->role->id == 1 ) {
            return $next($request);
        }elseif(Auth::check() && Auth::user()->role->id == 2 ){
            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }
        
    }
}
