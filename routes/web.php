<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;

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

Route::get('/databarang',[DataBarangController::class,'index'])->name('databarang');

Route::post('/tambahbarang', [DataBarangController::class, 'store'])->name('tambahbarang');

// Tampilkan Pengajuan User

Route::get('/pengajuan', function(){
    $users = DB::table('peminjaman')->get();

    return view('admin/pengajuan', ['requests' => $requests]);
});