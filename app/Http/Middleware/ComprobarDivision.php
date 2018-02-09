<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ComprobarDivision
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
        if ($request->divisor==0){
            return redirect()->route('divisorInvalido');
        } else {
            return $next($request);
        }
    }
}
