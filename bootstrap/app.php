<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        // api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register global middleware
        $middleware->append(\App\Http\Middleware\LogRequest::class);

        // Register middleware aliases
        $middleware->alias([
            'auth' => \App\Http\Middleware\Authenticate::class,
            'role' => \App\Http\Middleware\RoleMiddleware::class,
        ]);

        // Register middleware groups
        $middleware->group('admin', [
            \App\Http\Middleware\RoleMiddleware::class,
            // Add other middleware classes here
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Customize exception handling if needed
    })
    ->create();
