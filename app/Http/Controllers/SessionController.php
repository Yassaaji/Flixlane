<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VerifyEmail;
use App\Models\Verifytoken;
use Illuminate\Http\Request;
use App\Mail\verificationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SessionController extends Controller
{
    public function index(){
        return view("sesi.index");
    }

    public function login(Request $request)
    {
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
            //  dd($user);
            if ($user->role === 'admin'){
                return Redirect()->route('admin')->with('success','anda berhasil login');
            } elseif ($user->role === 'user') {
                return Redirect()->route('home')->with('succes', 'anda berhasil login');
            }
        }else{
            return redirect()->back()->with('error', "akun tidak ditemukan");
        }

        return redirect()->route('sesi-index')->with('error', 'Email atau kata sandi salah.');

    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('sesi-index')->with('success', 'Anda Berhasil Logout.');
    }

    public function register(){
        return view('sesi.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name',
            'username' => 'required',
            'email' => 'required|email|unique:users,email', // Ubah aturan validasi di sini
            'password' => 'required|min:6',
            're-password' => 'required|same:password', // Menambahkan validasi konfirmasi password
        ], [
            'name.required' => 'Nama Wajib diisi',
            'name.unique' => 'Nama Panjang sudah digunakan',
            'username.required' => 'Nama Wajib diisi',
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
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ];

        User::create($data);

        $validtoken = rand(10,100..'2023');
        $get_token = new Verifytoken();
        $get_token->token = $validtoken;
        $get_token->email = $request->email;
        $get_token -> save();
        $get_user_email = $request->email;
        $get_user_name = $request->name;
        Mail::to($request->email)->send(new verificationMail($get_user_email,$validtoken,$get_user_name));




        return redirect()->route('verifikasi')->with('success', 'Akun berhasil dibuat. Silahkan login.');
    }

    public function verifikasi()
    {
        $token =  Verifytoken::all();
        return view('sesi.verifikasi',compact('token'));
    }
    public function userverifikasi(Request $request)
    {
        $get_token = $request->token;
        $get_token = Verifytoken::where('token',$get_token)->first();

        if($get_token){
            $get_token->is_activated = 1;
            $get_token->save();
            $user = user::where('email',$get_token->email)->first();
            $user->is_activated = 1;
            $user->save();
            $getting_token = Verifytoken::where('token',$get_token->token)->first();
            $getting_token->delete();
            return redirect('/sesi')->with('success','Email anda sudah terverifikasi');
        }else{
            return redirect('/verifikasi')->with('error','Kode OTP anda tidak valid!!');
        }
    }
}
