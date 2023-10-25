<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmark = Bookmark::All();
        $kategori = Kategori::All();
        return view('user.favorites', compact('bookmark', 'kategori'));
    }

    public function create($id)
    {
        $bookmark = Bookmark::where('film_id', $id)->first();

        if (empty($bookmark)) {
            Bookmark::create(['film_id' => $id]);
            return redirect()->route('home')->with('success', 'Video berhasil ditambahkan');
        } else {
            return redirect()->route('home')->with('error', 'Video sudah ditambahkan');
        }
    }
}
