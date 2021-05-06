<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authadmin
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
        if(auth()->user()->utype== "ADM"){
            return $next($request);
         }
         return redirect('user/dashboard')->with('error', "you don't have admin");
    }
}
