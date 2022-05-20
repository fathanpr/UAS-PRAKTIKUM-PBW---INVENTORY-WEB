<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    use HasFactory;


    protected $table = 'peminjaman';
    protected $fillable = [
        'barang',
        'jumlah',
        'tanggal_pinjam',
        'durasi',
        'status'
    ];
}
