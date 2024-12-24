<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PegawaiController;
// Tambahkan route baru di routes/web.php
use App\Http\Controllers\AnggotaController;

use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasantriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/salam', function (){
    return "Assalamualaikum, selamat Belajar Laravel PeTIK Jombang Angkatan III";
});

//Tambahkan route baru di routes/web.php
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi){
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//Tambahkan route baru di routes/web.php
Route::get('/kabar', function (){
    return view('kondisi');
});


Route::get('/santri', [SantriController::class, 'dataSantri']
);

//routing view Data mahaSantri
Route::get('/mahasantri', [mahasantriController::class, 'dataMahasantri']
);



Route::get('/hello', function (){
    return view('hello', ['name' => 'Inaya']);
});


Route::get('/nilai', function (){
    return view('nilai');
});


Route::get('/daftarnilai', function (){
    return view('daftar_nilai');
});

Route::get('/phpframework', function (){ 
    return view('layouts.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pegawai',[PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create',[PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai',[PegawaiController::class, 'store'])->name('pegawai.store');

Route::get('/anggota',[AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/create',[AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota',[AnggotaController::class, 'store'])->name('anggota.store');

//routing Pengaran, Penerbit, Kategori, Buku
Route::resource('pengarang', PengarangController::class);
Route::resource('penerbit', PenerbitController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('buku', BukuController::class);

Route::resource('matakuliah', MatakuliahController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('dosen', DosenController::class);
Route::resource('mahasantri', MahasantriController::class);


Route::get('bukupdf',[BukuController::class,'bukuPDF']);





