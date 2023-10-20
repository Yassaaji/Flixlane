<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Auth = Auth::user();

        if ($Auth->role === 'user') {
            return view('user/home-full', compact('Auth'));
        } elseif ($Auth->role === 'admin') {
            return redirect()->route('admin');
        }
    }

    public function single()
    {
        return view('user/single');
    }

    public function search()
    {
        return view('user/search-full');
    }

    public function season()
    {
        return view('user/season-full');
    }

    public function landing()
    {
        return view('user/landing');
    }

    public function detail()
    {
        return view('user/detail');
    }

    public function profile()
    {
        return view('user/profile');
    }

    public function favorite()
    {
        return view('user/favorites');
    }

    public function video()
    {
        return view('user/video');
    }
}
