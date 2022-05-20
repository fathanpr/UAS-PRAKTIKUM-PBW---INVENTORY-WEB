<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DasborController;

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
    return view('index');
});

// Login Logout Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Peminjaman Route

Route::get('/peminjaman',[PeminjamanController::class,'index'])->name('peminjaman');

Route::post('/ajukanpeminjaman', [PeminjamanController::class, 'store'])->name('ajukanpeminjaman');

// Tambah Barang Route

Route::get('/databarang', function(){
    $users = DB::table('databarang')->get();

    return view('admin/databarang', ['databarang' => $databarang]);
})->name('databarang');

Route::post('/tambahbarang', [DataBarangController::class, 'store'])->name('tambahbarang');

// Tampilkan Pengajuan User

Route::get('/pengajuan', function(){
    $users = DB::table('peminjaman')->get();

    return view('admin/pengajuan', ['peminjaman' => $requests]);
});

// Tampilkan Data Barang
Route::get('/lihatbarang', function(){
    $users = DB::table('databarang')->get();

    return view('user/lihatbarang', ['databarang' => $databarang]);
})->name('lihatbarang');

//Dasbor Admin
Route::get('/dasbor',[DasborController::class,'index'])->name('dasbor');
