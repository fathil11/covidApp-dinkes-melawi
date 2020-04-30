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
        if (Auth::check()) {
            if ($request->user()->email == "admin1@dinkesmelawi.com" ||
            $request->user()->email == "admin2@dinkesmelawi.com" ||
            $request->user()->email == "admin3@dinkesmelawi.com") {
                return $next($request);
            } elseif($request->user()->email == "perbatasan@dinkesmelawi.com") {
                return redirect('/admin-perbatasan');
            }else{
                return redirect('/admin/post');
            }
        } else {
            return redirect('/');
        }
    }
}
