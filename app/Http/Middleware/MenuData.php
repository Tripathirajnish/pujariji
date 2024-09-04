<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Lang;

class MenuData
{
    public function handle($request, Closure $next)
    {
        $menu_data = Lang::get('menu');
        View::share('menu', $menu_data);
        return $next($request);
    }
}
