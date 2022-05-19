<?php

namespace App\Http\Controllers;

use App\Models\DataBarangModel;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    public function index(){
        return view('admin.databarang');
    }

    public function store(Request $request){
        $data = $request->all();
        DataBarangModel::create($data);
        return redirect()->route('databarang');
    }
}