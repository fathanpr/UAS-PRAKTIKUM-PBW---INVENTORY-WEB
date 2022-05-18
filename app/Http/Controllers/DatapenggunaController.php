<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatapenggunaController extends Controller
{
    public function index(){
        return view('admin.datapengguna');
    }
}
