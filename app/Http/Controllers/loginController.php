<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
        public function index()
    {
        return view('login&register', ["page" => [
        "title" => "Login",
        "navAktif" => 1,
        "halaman" => 23]]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ["required", "min:3", "email", "max:255"],
            'password' => ["required", "min:8", "max:128"],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        return redirect('/login');
    }
}
