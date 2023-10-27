<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Komentar;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        try {
            $Auth = Auth::user();
            $Film = Film::where('id', $id)->first();
            $Komentar = Komentar::where('film_id', $Film->id)->orderBy('created_at', 'desc')->paginate(25);
            // $Post->liked = Like::where('post_id', $Post->id)
            //     ->where('user_id', $Auth->id)
            //     ->exists();

            if ($Auth->role === 'user') {
                return view('user.video', compact('Film', 'Komentar', 'Auth', 'id'));
            }
        } catch (Exception $th) {
            return redirect()->route('home')->with('error', "Something went wrong, try again later");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'komentar' => 'required'
        ], [
            'komentar.required' => 'Komentar harus di isi'
        ]);


        $komentar = new Komentar([
            'user_id' => Auth::user()->id,
            'film_id' => $request->input('film_id'),
            'komentar' => $request->input('komentar'),
            'tanggal' => now()
        ]);
// a
        $komentar->save();

        $film = Film::findOrFail($request->film_id);
        return redirect()->back()->with('success', "Berhasil menambahkan komentar");

        // return response()->json([
        //     'message' => 'Komentar berhasil disimpan.',
        //     'newKomentar' => [
        //         'user' => [
        //             'profile' => $komentar->user->profile,
        //             'name' => $komentar->user->name,
        //         ],
        //         'komentar' => $komentar->komentar,
        //         'tanggal' => $komentar->created_at->format('d F Y'),
        //         'id' => $komentar->id,
        //     ]
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Komentar $komentar)
    {
        //
    }

    public function reply(Request $request, string $id ){
        Komentar::create([
            'user_id' => Auth::user()->id,
            'film_id' => $request->input('film_id'),
            'parent_id' => $id,
            'komentar' => $request->input('komentar'),
            'tanggal' => now()

        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komentar $komentar)
    {
        $komentar->delete();
        return redirect()->back()->with('success', 'Komentar berhasil dihapus.');
    }
}
