<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // Authentication logic
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
