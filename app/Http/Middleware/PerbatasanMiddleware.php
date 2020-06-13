<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class PerbatasanMiddleware
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
        if (Auth::check()) {
            if ($request->user()->id >= 6 && $request->user()->id <= 16 || $request->user()->id == 5) {
                return $next($request);
            } else {
                return redirect('/admin');
            }
        } else {
            return redirect('/');
        }
    }
}
