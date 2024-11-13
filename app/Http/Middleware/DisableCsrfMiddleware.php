<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableCsrfMiddleware
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
        // Menonaktifkan CSRF verification untuk request yang datang
        // Anda bisa mengecualikan berdasarkan rute atau kondisi lain
        if ($request->is('foods')) {
            // Menonaktifkan CSRF token untuk rute /foods
            session()->forget('csrf_token');
        }

        return $next($request);
    }
}

