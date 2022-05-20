<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBarangModel;

class LihatBarangController extends Controller
{
    public function index(Request $request){

        if($request){
            $data_barang  = DataBarangModel::where('barang','LIKE','%' .$request->search.'%')->get();
        }else{
            $data_barang  = DataBarangModel::all();
        }
        return view('user.lihatbarang',compact('data_barang'));
    }
}
