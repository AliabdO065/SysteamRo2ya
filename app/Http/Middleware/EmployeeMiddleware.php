<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EmployeeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the authenticated user is an admin
        if ( (Auth::check() && Auth::user()->role === 'employee') || Auth::check() && Auth::user()->role === 'admin' || Auth::check() && Auth::user()->role === 'manger' ) {
            return $next($request);
        }

        // If not an admin, redirect or return an error response
        return redirect()->route('logout');

    }
}
