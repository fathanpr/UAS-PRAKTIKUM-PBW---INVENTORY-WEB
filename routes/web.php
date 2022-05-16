<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LihatbarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UbahprofilController;

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
    return view('user/profil');
});

Route::get('/profil', [ProfilController::class, 'index']
);

Route::get('/lihatbarang', [LihatbarangController::class, 'index']
);

Route::get('/peminjaman', [PeminjamanController::class, 'index']
);

Route::get('/riwayat', [RiwayatController::class, 'index']
);

Route::get('/ubahprofil', [UbahprofilController::class, 'index']
);

Route::get('/login', [LoginController::class, 'index']
);
Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);