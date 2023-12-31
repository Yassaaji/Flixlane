<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\bookmark;
use App\Models\User;
use App\Models\Film;
use App\Models\Kategori;
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

        $get_user = user::where('email',auth()->user()->email)->first();
        if ($get_user->is_activated === 1) {
            if ($Auth->role === 'user') {
                $films = Film::all();
                $kategori = Kategori::all();
                return view('user/home-full', compact('Auth', 'films', 'kategori'));
            } elseif ($Auth->role === 'admin') {
                return redirect()->route('admin');
            }
        }else{
            return redirect()->back();
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

    public function Anime($id)
    {
        $kategori = Kategori::get();

        $films = Film::with('kategori')->where('kategori_id', $id)->get();

        return view('user/season-full', compact('films', 'kategori'));
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
}
