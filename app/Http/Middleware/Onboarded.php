<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Onboarded
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (! auth()->check()) {
            return redirect(route('login'));
        }
        if (!auth()->user()->onboarded) {
            return redirect(route('onboarding'));
        }
        return $next($request);
    }
}
