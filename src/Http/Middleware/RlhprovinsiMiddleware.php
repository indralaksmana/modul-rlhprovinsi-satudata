<?php namespace Satudata\Rlhprovinsi\Http\Middleware;

use Closure;

/**
 * The RlhprovinsiMiddleware class.
 *
 * @package Satudata\Rlhprovinsi
 * @author  MKI <info@mkitech.net>
 */
class RlhprovinsiMiddleware
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
        return $next($request);
    }
}
