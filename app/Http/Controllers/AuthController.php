<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function index()
    {
        return view('Auth.Login');
    }

    function Register()
    {
        return view('Auth.Register');
    }

    function ForgetPassword()
    {
        return view('Auth.Forget');
    }

    function ResetPassword()
    {
        return view('Auth.Change');
    }

    function Home()
    {
        return view('Auth.Guest');
    }

    function Tujuan()
    {
        return view('Auth.Guest');
    }

    function Tentang()
    {
        return view('Auth.Guest');
    }

    function Kebijakan()
    {
        return view('Auth.Guest');
    }

    function Logout()
    {
        $Check = User::all()->count();
        try {
            $Name = Auth::user()->name;
        } catch (Exception $th) {
            $Name = 'Unknown';
        }

        Auth::logout();
        return redirect('/')->with('success', 'See you later ' . $Name);
    }

    function RedirectChange()
    {
        Auth::logout();
        return view('Auth.Forget');
    }

    function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ], [
            'email.required' => 'Email cannot be empty',
            'email.exists' => "This email doesn't exist",
            'email.email' => 'Please enter a valid email',
            'password.required' => 'Incorrect password',
        ]);

        $LoginInformation = [
            'email' => $request->email,
            'password' => $request->password
        ];

        try {
            if (Auth::attempt($LoginInformation)) {
                $request->session()->regenerate();
                if (Auth::user()->role === 'user') {
                    return redirect()->route('Home.index')->with('success', 'Hello ' . Auth::user()->name . ", Welcome");
                } elseif (Auth::user()->role === 'admin') {
                    return redirect()->route('AdminDashboard.index')->with('success', "Hello Admin " . Auth::user()->name);
                }
            } else {
                return back()->with('error', "Email or password is incorrect");
            }
        } catch (Exception $th) {
            return back()->with('error', "Something wen't wrong, try again later");
        }
    }

    function CreateUser(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'role' => 'required|in:user',
        ], [
            'name.required' => 'Username cannot be empty',
            'name.unique' => 'Name already exists.',
            'email.required' => 'Email cannot be empty',
            'email.email' => 'Email Not Valid',
            'email.unique' => 'Email already exists',
            'password.required' => 'Password cannot be empty',
            'password.confirmed' => 'Password not the same',
            'password.min' => 'Confirm the password must be at least 8 characters',
            'role.required' => 'Role must be selected',
            'role.in' => 'Invalid role selected',
        ]);

        try {
            $randomCode = 'POST_' . Str::random(10);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'tag' => '@' . strtolower(str_replace(' ', '', $request->name)),
                'password' => Hash::make($request->password),
                'changepassword' => $request->password,
                'role' => $request->role,
                'random_code' => $randomCode,
            ];

            User::create($data);
        } catch (Exception $th) {
            return back()->with('error', "Something went wrong, try again later");
        }

        return redirect('/')->with('success', "Success registered your account");
    }
}
