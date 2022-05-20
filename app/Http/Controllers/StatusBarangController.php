<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanModel;

class StatusBarangController extends Controller
{
    public function index(){
        $data  = PeminjamanModel::all();
        return view('admin.statusbarang',compact('data'));
    }
}
