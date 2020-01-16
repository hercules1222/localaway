<?php

namespace App\Http\Middleware;

use Closure;

class AuthCustomer
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
        if (auth()->check()) {
            if (auth()->user()->user_type == 'customer') {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
