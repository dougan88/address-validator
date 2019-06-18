<?php

namespace App\Http\Middleware;

use Closure;

class RedirectMiddleware
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
        if ($request->getPathInfo() !== '/validate-address'
        && $request->getPathInfo() !== '/404') {
            return redirect()->route('404');
        }

        return $next($request);
    }
}
