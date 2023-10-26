<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Kategori;
use App\Models\Penayangan;
use App\Models\Komentar;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $kategori = Kategori::all();
        $film = Film::find($id);
        $Komentar = Komentar::where('film_id', $id)->get();
        return view('user.video', compact('film','kategori', 'Komentar', 'id'));
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
    // dd($request->all());
    $request->validate([
        'judul' => 'string|max:100',
        'minimal_usia' => 'integer|gt:0',
        'kategori_id' => 'string',
        'durasi' => 'max:10',
        'tayang' => 'date',
        'sinopsis' => 'string|max:1000',
        'thumbnail' => 'required|image|max:5000|mimes:jpeg,png,jpg',
        'video' => 'mimes:mp4',
    ], [
        'judul.string' => 'Judul harus menggunakan huruf.',
        'judul.max' => 'Judul maksimal 100 karakter.',
        'minimal_usia.integer' => 'Usia harus menggunakan angka.',
        'minimal_usia.gt:0' => 'Minimal usia tidak boleh melebihi 100 karakter.',
        'durasi.max' => 'Durasi maksimal 10 karakter.',
        'tayang.date' => 'Tayang harus berupa tanggal.',
        'sinopsis.string' => 'Sinopsis harus berupa huruf.',
        'sinopsis.max' => 'Sinopsis maksimal 1000 karakter.',
        'thumbnail.required' => 'Thumbnail harus diisi.',
        'thumbnail.image' => 'Thumbnail harus berupa gambar.',
        'thumbnail.mimes' => 'Thumbnail harus berupa gambar.',
        'thumbnail.max' => 'Ukuran thumbnail maksimal 5MB.',
        'video.mimes' => 'Berkas harus berupa video MP4.',
    ]);

    $thumbnail = $request->file('thumbnail');
    $thumbnailName = uniqid() . '.' . $thumbnail->getClientOriginalExtension();
    $thumbnail->storeAs('thumbnail/', $thumbnailName);

    $video = $request->file('video');
    $videoName = uniqid() . '.' . $video->getClientOriginalExtension();
    $video->storeAs('video/', $videoName);

    $film = new Film;
    $film->vidio = $videoName;
    $film->thumbnile = $thumbnailName;
    $film->judul = $request->judul;
    $film->sinopsis = $request->sinopsis;
    $film->durasi = $request->durasi;
    $film->minimal_usia = $request->minimal_usia;
    $film->kategori_id = $request->kategori;
    $film->tayang = $request->tayang;
    $film->save();

    return redirect()->route('daftarfilm')->with('success', 'Berhasil menambah data.');
}

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        $film->load('kategori');
        $kategori = Kategori::all();
        return view('user.video',compact('film', 'kategori'));
    }

    public function daftarfilm()
    {
        $films = Film::with('kategori')->get();

        return view('admin.daftarfilm', compact('films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $film = Film::with('kategori')->where('id',$id)->get()[0];
        // dd($film);
        $kategori = Kategori::all();
        return view('admin.edit-film',compact('film','kategori'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, $id)
    {
        $request->validate([
            'judul'=>'string|max:100',
            'minimal_usia'=> 'integer|gt:0',
            'kategori_id' => 'string',
            'durasi'=> 'max:10',
            'tayang' => 'date',
            'sinopsis' => 'string|max:1000',
            'thumbnile' => 'image|max:5000',
            'vidio' => 'file|mimetypes:video/mp4',
        ],[
            'judul.string' => 'judul harus menggunakan huruf',
            'judul.max' => 'judul maksimal 100 karakter',
            'minimal_usia.integer' => 'usia harus menggunakan angka',
            'minimal_usia.gt:0' => 'minimal usia tidak boleh melebihi 100 karakter',
            'durasi' => 'durasi maksimal 10 karakter',
            'tayang' => 'tayang harus berupa tanggal',
            'sinopsis' => 'sinopsis harus berupa huruf',
            'sinopsis.max' => 'sinopsis maksimal 1000 karakter',
            'thumbnile.image' => 'thumbnile harus berupa gambar',
            'thumbnile.max' => 'thumbnile maksimal 50MB',
            'vidio.file' => 'Berkas harus berupa video.',
            'vidio.mimetypes' => 'Berkas harus berupa video MP4.',
        ]);

        $filmLama = Film::where('id', $id)->first();
        if(!empty($request->file('thumbnile'))){
            $thumbnile = $request->file('thumbnail');
            $thumbnileName = uniqid() . '.' . $thumbnile->getClientOriginalExtension();
            Storage::delete('thumbnile/'. $filmLama->thumbnile);
            $thumbnile->storeAs('thumbnile/', $thumbnileName);
        }

        $data = [
         'judul' => $request->judul,
         'minimal_usia' => $request->minimal_usia,
         'kategori_id' => $request->kategori,
         'durasi' => $request->durasi,
         'tayang' => $request->tayang,
         'sinopsis' => $request->sinopsis,
         'thumbnile' => empty($request->file('thumbnail')) ? $filmLama->thumbnile : $thumbnileName

        ];
        $filmLama->update($data);
        return redirect()->route('daftarfilm')->with('success', 'film berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();

        Storage::delete('thumbnail/' . $film->thumbnile);
        Storage::delete('video/' . $film->vidio);

        return redirect()->route('daftarfilm')->with('success', 'Data berhasil dihapus');
    }
}
