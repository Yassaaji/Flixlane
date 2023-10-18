<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'komentar' => 'required'5
        ], [
            'komentar.required' => 'Komentar harus di isi'
        ]);


        $komentar = new Komentar([
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id,
            'komentar' => $request->komentar,
            'tanggal' => now()
        ]);

        $komentar->save();

        $post = Post::findOrFail($request->post_id);

        return response()->json([
            'message' => 'Komentar berhasil disimpan.',
            'newKomentar' => [
                'user' => [
                    'profile' => $komentar->user->profile,
                    'name' => $komentar->user->name,
                ],
                'komentar' => $komentar->komentar,
                'tanggal' => $komentar->created_at->format('d F Y'),
                'id' => $komentar->id,
            ]
        ]);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komentar $komentar)
    {
        //
    }
}
