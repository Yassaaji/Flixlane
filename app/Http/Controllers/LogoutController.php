<?php

namespace App\Http\Controllers;

use App\Models\Logout;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function logout(Request $request)
    {
        Logout::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Data Berhasil logout');
    }
}
