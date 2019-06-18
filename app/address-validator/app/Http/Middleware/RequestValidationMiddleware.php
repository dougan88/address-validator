<?php

namespace App\Http\Middleware;

use Closure;

class RequestValidationMiddleware
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
        if ($request->getPathInfo() === '/validate-address'
        && ($request->method() !== 'POST'
            || !$request->has('id'))) {
            return redirect()->route('404');
        }

        return $next($request);
    }
}
