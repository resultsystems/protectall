<?php

namespace App\Http\Middleware;

use Closure;

class VerifyTwoAuthenticate
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
            return $next($request);
        }

        if (!$request->user()->hasTwoAuthenticate()) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
