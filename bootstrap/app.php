<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo(function(\Illuminate\Http\Request $request) {
                session()->flash(
                    'feedback.message',
                    'You required to be authenticated. You are being redirected to the login page.',
                );
            // session()->flash('feedback.type', 'danger'); change this
            return route('auth.login');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
