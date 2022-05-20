<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanModel;

class RiwayatController extends Controller
{
    public function index(){
        $data  = PeminjamanModel::all();
        return view('user.riwayat',compact('data'));
    }
}
