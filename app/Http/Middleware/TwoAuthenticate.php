<?php

namespace App\Http\Middleware;

use Closure;

class TwoAuthenticate
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
        if (!$request->user()->two_authenticate) {
            return redirect()->guest('/');
        }

        return $next($request);
    }
}
