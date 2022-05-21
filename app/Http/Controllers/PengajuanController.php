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
        PeminjamanModel::find($id)->update(['status' => 'ongoing']);
        return redirect('/pengajuan');
    }

    public function tolak($id) {
        PeminjamanModel::find($id)->update(['status' => 'ditolak']);
        return redirect('/pengajuan');
    }
    
}
