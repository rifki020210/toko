<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin', ["page" => [
        "title" => "Dashboard",
        "halaman" => 1
    ]]);
});
Route::get('/admin/buatPengumuman', function () {
    return view('admin', ["page" => [
        "title" => "Buat Pengumuman",
        "halaman" => 2
    ]]);
});

Route::get('/admin/tambahProduk', function () {
    return view('admin', ["page" => [
        "title" => "Tambah Produk",
        "halaman" => 3
    ]]);
});

Route::get('/admin/aturJadwalPiket', function () {
    return view('admin', ["page" => [
        "title" => "Atur Jadwal Piket",
        "halaman" => 4
    ]]);
});