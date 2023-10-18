<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('user/home-full');
    }

    public function view()
    {
        return view('user/index');
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

    public function video()
    {
        return view('user/video');
    }

    public function profile()
    {
        return view('user/profile');
    }
}
