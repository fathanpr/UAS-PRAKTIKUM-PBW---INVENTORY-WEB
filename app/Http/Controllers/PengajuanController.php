<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanModel;


class PengajuanController extends Controller
{
    public function index(){

        $pengajuan  = PeminjamanModel::all();
        return view('admin.pengajuan',compact('pengajuan'));
    }

    public function setuju($id) {
        PeminjamanModel::update("UPDATE peminjaman SET status='ongoing' WHERE id = ?", [$id]);
        return redirect('pengajuan');
    }
    
}
