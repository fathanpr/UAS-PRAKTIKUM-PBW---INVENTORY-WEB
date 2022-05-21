<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DataPenggunaController;
use App\Http\Controllers\EditBarangController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UbahProfilController;
use App\Http\Controllers\LihatBarangController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\StatusBarangController;

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

// Tampilkan Profil

Route::get('/profil',[ProfilController::class,'index'])->name('profil')->middleware(['auth']);

// Peminjaman Route

Route::get('/peminjaman',[PeminjamanController::class,'index'])->name('peminjaman')->middleware(['auth']);

Route::post('/ajukanpeminjaman', [PeminjamanController::class, 'store'])->name('ajukanpeminjaman')->middleware(['auth']);

// Pengajuan User

Route::get('/pengajuan', [PengajuanController::class,'index'])->name('pengajuan')->middleware(['auth']);

Route::post('/setuju/{id}',[PengajuanController::class,'setuju'])->name('setuju')->middleware(['auth']);

Route::post('/tolak/{id}',[PengajuanController::class,'tolak'])->name('tolak')->middleware(['auth']);

// Tampilkan Data Barang

Route::get('/databarang',[DataBarangController::class,'index'])->name('databarang')->middleware(['auth']);

Route::post('/tambahbarang',[DataBarangController::class,'store'])->name('tambahbarang');

Route::get('deletebarang/{kode_barang}',[DataBarangController::class,'destroy'])->name('hapusbarang')->middleware(['auth']);

Route::get('/editbarang/{id}',[DataBarangController::class,'editbarang'])->name('editbarang')->middleware(['auth']);

Route::post('/updatedata/{id}',[DataBarangController::class,'updatedata'])->name('updatedata');

//Dasbor Admin

Route::get('/dasbor',[DasborController::class,'index'])->name('dasbor')->middleware(['auth']);

// Tampilkan Data Pengguna

Route::get('/datapengguna',[DataPenggunaController::class,'index'])->name('datapengguna')->middleware(['auth']);

Route::get('delete/{id}',[DataPenggunaController::class,'destroy'])->name('hapususer');

// Lihat Barang 

Route::get('/lihatbarang',[LihatBarangController::class,'index'])->name('lihatbarang')->middleware(['auth']);

// Lihat Riwayat 

Route::get('/riwayat',[RiwayatController::class,'index'])->name('riwayat');

Route::get('/statusbarang',[StatusBarangController::class, 'index'])->name('statusbarang');

// Export PDF

Route::get('/riwayat/downloadpf/{id}',[RiwayatController::class,'exportpdf'])->name('exportpdf');