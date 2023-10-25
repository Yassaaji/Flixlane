<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (!Auth::check()) {
            return redirect()->route('sesi-index')->with('error', 'Harus login dahulu.'); // Ganti dengan rute login Anda
        }

        // if (!Auth::user()->hasVerifiedEmail()) {
        //     return redirect()->route('verification.notice')->with('success', 'Meilani nakal'); // Sesuaikan dengan rute verifikasi yang digunakan di Laravel
        // }

        return $next($request);
    }
}
