<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanModel;
use Illuminate\Http\Request;
use App\Models\DataBarangModel;

class PeminjamanController extends Controller
{
    public function index(){
        $items  = DataBarangModel::all();
        return view('user.peminjaman',compact('items'));
    }

    public function store(Request $request){
        $data = $request->all();
        PeminjamanModel::create($data);
        return redirect()->route('peminjaman');
    }
}