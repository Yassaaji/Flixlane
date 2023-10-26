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
        switch (empty($bookmark)) {
            case true:
                Bookmark::create(['film_id' => $id]);
                return redirect()->back()->with('success', 'Video berhasil ditambahkan');
                break;
            case false:
                return redirect()->back()->with('success', 'Video berhasil ditambahkan');
                break;
        }

    }

    public function destroy($id)
    {
        $bookmark = Bookmark::find($id);

        if (!$bookmark) {
            return redirect()->back()->with('error', 'Bookmark tidak ditemukan.');
        }

        $bookmark->delete();
        return redirect()->back()->with('success', 'Bookmark berhasil dihapus.');
    }
}
