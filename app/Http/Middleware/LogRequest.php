<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogRequest
{
    public function handle(Request $request, Closure $next)
    {
        // Log the request details
        \Log::info('Request Logged:', ['url' => $request->url(), 'method' => $request->method()]);

        return $next($request);
    }
}
