<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbahProfilModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    
    protected $fillable = [
        'name',
        'username',
        'email',
        'notelp'
    ];}
