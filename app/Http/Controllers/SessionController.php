<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){
        return view("sesi.index");
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

       $infologin = $request->only('email', 'password');

        // dd($infologin);
        if (Auth::attempt($infologin)) {
            $user = Auth::user();

            if ($user->role === 'admin'){
                return redirect()->route('')->with('success','anda berhasil login');
            } elseif ($user->role === 'user') {
                return Redirect()->route('home')->with('succes', 'anda berhasil login');
            }
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('sesi-index')->with('success', 'Berhasil logout');
    }

    public function register(){
        return view('sesi.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Ubah aturan validasi di sini
            'password' => 'required|min:6',
            're-password' => 'required|same:password', // Menambahkan validasi konfirmasi password
        ], [
            'name.required' => 'Nama Wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah digunakan. Silahkan gunakan email lain.', // Pesan kesalahan untuk email yang sudah dipakai
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan 6 karakter',
            're-password.required' => 'Konfirmasi Password wajib diisi',
            're-password.same' => 'Konfirmasi Password harus sama dengan Password', // Pesan kesalahan untuk konfirmasi password tidak cocok
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ];

        User::create($data);

        return redirect()->route('sesi-index')->with('success', 'Akun berhasil dibuat. Silahkan login.');
    }

}
