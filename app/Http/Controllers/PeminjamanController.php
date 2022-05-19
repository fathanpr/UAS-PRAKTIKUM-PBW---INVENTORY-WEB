<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanModel;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        return view('user.peminjaman');
    }

    public function store(Request $request){
        $data = $request->all();
        PeminjamanModel::create($data);
        return redirect()->route('peminjaman');
    }
}
