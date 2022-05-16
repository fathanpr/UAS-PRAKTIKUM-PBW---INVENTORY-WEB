<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatbarangController extends Controller
{
    public function index(){
        return view('user.lihatbarang');
    }
}
