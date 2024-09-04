<?php

namespace App\Http\Middleware;

// use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Session;
use DB;
use Illuminate\Support\Facades\URL;

class AdminCheck
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('login_id')) {
            return redirect('/');
        }
        return $next($request);
    }
}
