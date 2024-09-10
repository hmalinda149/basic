<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and has the 'admin' role
        if (Auth::check() && Auth::user()->userType == 1) {
            return $next($request);
        }

        // If not admin, redirect to login or some other page
        return redirect('/login');
    }
}
