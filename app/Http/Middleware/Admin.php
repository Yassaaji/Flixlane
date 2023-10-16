<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                if (Auth::user()->status === 'banned') {
                    Auth::logout();
                    return redirect('/')->with('error', "Sorry, your account is banned from this website forever");
                }
                return $next($request);
            }
            return redirect()->back()->with('error', "You don't have access to this page");
        }

        return redirect('/')->with('error', "Sign in to access this page");
    }
}
