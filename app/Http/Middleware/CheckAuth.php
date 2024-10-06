<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuth
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
        // Jika pengguna belum terautentikasi, redirect ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login'); // Pastikan Anda memiliki route 'login'
        }

        return $next($request);
    }
}
