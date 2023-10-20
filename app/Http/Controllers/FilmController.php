<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Kategori;
use App\Models\Penayangan;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('admin.tambahfilm',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        dd($request->all());
        $thumbnile = $request->file('thumbnile');
        $thumbnileName = uniqid() . '.' . $thumbnile->getClientOriginalExtension();
        $thumbnile->storeAs('thumbnile/', $thumbnileName);

        $video = $request->file('video');
        $videoName = uniqid() . '.' . $video->getClientOriginalExtension();
        $video->storeAs('video/', $videoName);

        $film = new Film;
        $film->judul = $request->judul;
        $film->deskripsi = $request->deskripsi;
        $film->durasi = $request->durasi;
        $film->minimal_usia = $request->minimal_usia;
        $film->kategori_id = $request->kategori;
        $film->tayang = $request->tayang;

        $penayangan = new Penayangan;
        $penayangan->film_id = $film->id;
        $penayangan->penonton = 0;

        $penayangan->save();

        return redirect()->route('daftarfilm')->with('success', 'berhasil menambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        $film->load('kategori');

        return view('user.video',compact('film'));
    }

    public function daftarfilm()
    {
        $films = Film::with('kategori')->get();

        return view('admin.daftarfilm', compact('films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
