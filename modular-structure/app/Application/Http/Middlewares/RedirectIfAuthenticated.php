<?php

namespace App\Application\Http\Middlewares;

use Closure;
use App\Interfaces\Http\Controllers\ResponseTrait;

class RedirectIfAuthenticated
{
    use ResponseTrait;

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        return $next($request);
    }
}
