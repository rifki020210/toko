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
    return view('users', ["page" => [
        "title" => "Beranda",
        "navAktif" => 1,
        "halaman" => 15
    ]]);
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

Route::get('/admin/buatJumlahOrderan', function () {
    return view('admin', ["page" => [
        "title" => "Buat Jumlah Orderan",
        "halaman" => 5
    ]]);
});

Route::get('/admin/buatAduan', function () {
    return view('admin', ["page" => [
        "title" => "Buat Aduan",
        "halaman" => 6
    ]]);
});

Route::get('/admin/daftarAkunHalamanAdmin', function () {
    return view('admin', ["page" => [
        "title" => "Daftar Akun",
        "halaman" => 7
    ]]);
});

Route::get('/admin/produkReady', function () {
    return view('admin', ["page" => [
        "title" => "Produk Ready",
        "halaman" => 8
    ]]);
});

Route::get('/admin/produkKosong', function () {
    return view('admin', ["page" => [
        "title" => "Produk Kosong",
        "halaman" => 9
    ]]);
});

Route::get('/admin/produkBermasalahAdmin', function () {
    return view('admin', ["page" => [
        "title" => "Produk Bermasalah Admin",
        "halaman" => 10
    ]]);
});

Route::get('/admin/orderanHariiniAdmin', function () {
    return view('admin', ["page" => [
        "title" => "Orderan Hari ini Admin",
        "halaman" => 11
    ]]);
});

Route::get('/admin/aduanPelangganAdmin', function () {
    return view('admin', ["page" => [
        "title" => "Aduan Pelanggan Admin",
        "halaman" => 12
    ]]);
});

Route::get('/admin/aduanKaryawanAdmin', function () {
    return view('admin', ["page" => [
        "title" => "Aduan Karyawan Admin",
        "halaman" => 13
    ]]);
});

Route::get('/admin/pengaturanAdmin', function () {
    return view('admin', ["page" => [
        "title" => "Pengaturan Admin",
        "halaman" => 14
    ]]);
});

Route::get('/users', function () {
    return view('users', ["page" => [
        "title" => "Beranda",
        "navAktif" => 1,
        "halaman" => 15
    ]]);
});