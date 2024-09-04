<?php

namespace App\Http\Middleware;

use Closure;

class CustomAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        $my_token = date('dmY');

        $token = $request->header('Authorization');

        if (!$token || $token !== $my_token) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
