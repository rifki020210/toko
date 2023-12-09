<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarController extends Controller
{
    public function daftar()
    {
           return view('login&register', ["page" => [
            "title" => "Daftar Akun",
            "navAktif" => 1,
            "halaman" => 22
        ]]);
    }

    
}
