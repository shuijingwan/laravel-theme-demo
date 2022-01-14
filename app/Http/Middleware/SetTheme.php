<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetTheme
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $themeName = "t2";
        if(\Theme::exists($themeName)){
            \Theme::set($themeName);
        }

        return $next($request);
    }
}
