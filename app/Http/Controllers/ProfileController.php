<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; // Tambahkan ini untuk menggunakan DB::beginTransaction()
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $Profile = Auth::user();
        if (Auth::user()->role === 'user') {
            return view('User.profile', compact('Profile'));
        }
    }

    public function create(Request $request)
    {
        Profile::create([
            'profile' => $request->profile,
            'nama' => $request->nama,
            'username' => $request->kota,
        ]);

        return redirect()->route('profile.index')->with('success', 'Profil berhasil dibuat.');
    }

    public function store(Request $request)
    {
        return view('create');
    }

    public function show(Profile $profile)
    {
        //
    }

    public function edit()
    {
        $Profile = Auth::user(); // Mengambil data profil pengguna yang sedang masuk
        return view('User.editProfile', compact('Profile')); // Ganti dengan view yang sesuai
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|max:100',
            'profile' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Anda dapat menyesuaikan tipe file dan ukuran maksimum yang diizinkan
        ], [
            'name.required' => 'Name cannot be empty',
            'name.max' => 'Name max length is 100 characters',
            'username.required' => 'Username cannot be empty',
            'username.max' => 'Username max length is 100 characters',
            'profile.image' => 'The uploaded file must be an image.',
            'profile.mimes' => 'Supported image formats are: jpeg, png, jpg, gif',
            'profile.max' => 'Maximum file size is 2MB',
        ]);

        if (Auth::user()->id != $id) {
            return redirect()->back()->with('error', 'Nice try ' . Auth::user()->name);
        }

        try {
            $update_user = User::find(Auth::user()->id);

            if ($request->hasFile('profile')) {
                Storage::delete($update_user->profile);
                $update_user->profile = $request->file('profile')->store('foto-profile', 'public');
            }

            $update_user->name = $request->name;
            $update_user->username = $request->username;
            $update_user->save();

            return redirect()->back()->with('success', 'Success changing your profile');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update profile.');
        }
    }


    public function destroy(Profile $profile)
    {
        //
    }
}
