<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "mayorista" && auth()->guard($guard)->check()) {
            return redirect('/mayorista');
        }
        if ($guard == "turismo" && auth()->guard($guard)->check()) {
            return redirect('/turismo');
        }
//        if (auth()->guard($guard)->check()) {
//            return redirect('/home');
//        }
        return $next($request);
    }
}
