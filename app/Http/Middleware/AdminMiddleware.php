<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            if (! Auth::guard('admin')->check()) {
                return redirect()->route('admin.login')->with('error', 'Please sign in to access the admin console.');
            }
        } catch (\Throwable $e) {
            return redirect()->route('admin.login')->with('error', 'Database connection check: ' . $e->getMessage());
        }

        return $next($request);
    }
}

