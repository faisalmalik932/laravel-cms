<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class VerifyIsAdmin
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
        if (!auth()->user()->isAdmin()) {
            Session::flash('info', 'You do not have permissions to perform this action.');
        }
        return $next($request); 
    }
}
