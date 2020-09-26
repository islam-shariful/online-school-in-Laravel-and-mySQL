<?php

namespace App\Http\Middleware;

use Closure;

class VerifySession
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
        if($request->session()->has('username') || $request->session()->has('userid')){
            return $next($request);
        }else {
            $request->session()->flash('msg','InValid request');
            return redirect('/login');
        }
    }
}
