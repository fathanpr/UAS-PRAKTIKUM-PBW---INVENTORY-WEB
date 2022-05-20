<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarangModel extends Model
{
    use HasFactory;
    protected $table = 'databarang';
    
    protected $fillable = [
        'kode_barang',
        'barang',
        'jumlah',
        'status'
    ];
}
