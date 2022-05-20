<?php

namespace App\Http\Controllers;

use App\Models\DataBarangModel;
use App\Models\User;
use Illuminate\Http\Request;

class DasborController extends Controller
{
    public function index(){
        $data_barang  = DataBarangModel::all();
        $users  = User::all();
        return view('admin.dashboard',compact('data_barang','users'));
    }
}
