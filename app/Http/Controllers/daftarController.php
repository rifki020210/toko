<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class daftarController extends Controller
{
    public function daftar()
    {
           return view('login&register', ["page" => [
            "title" => "Daftar Akun",
            "navAktif" => 1,
            "halaman" => 22
        ]
    ]);
    }

    public function store(Request $request)
    {

    $rules = $request->validate([   
        "namaDepan" => ["required", "min:2", "max:50", "regex:/^[a-zA-Z\s]+$/"],
        "namaBelakang" => ["required", "min:2", "max:50", "regex:/^[a-zA-Z\s]+$/"],
        "email" => ["required", "min:3", "email", "max:255"],
        "password" =>  ["required", "min:8", "max:128"]
    ]);

        // $validator = Validator::make($request->all(), $rules);

        User::create([
            'first_name' => $request->input('namaDepan'),
            'last_name' => $request->input('namaBelakang'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // Hash the password before saving
        ]);
    
        // $user = User::create($validator);
        // if ($validator->passes()) {
            
        // } elseif($validator->fails()){
        //     return "gagal";
        // }
        return redirect('/login');
    }
}
