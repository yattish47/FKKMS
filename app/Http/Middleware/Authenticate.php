<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): ?string
    {
        if (!$request->expectsJson()) {
            // Allow default behavior (redirect to login) for non-API requests
            return route('login');
        }

        // For API requests, you might return a JSON response or customize it based on your needs
        return null;
    }
}
