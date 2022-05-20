<?php

namespace App\Http\Controllers;

use App\Models\DataBarangModel;
use Illuminate\Http\Request;

class EditBarangController extends Controller
{
    public function index(){
        return view('admin.editbarang');
    }
}
