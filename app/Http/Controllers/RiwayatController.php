<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanModel;
use Barryvdh\DomPDF\Facade\Pdf;

class RiwayatController extends Controller
{
    public function index(){
        $data  = PeminjamanModel::all();
        return view('user.riwayat',compact('data'));
    }

    public function exportpdf(Request $request,$id){

        $data = PeminjamanModel::find($id);
        
        $pdf = PDF::loadView('suratpinjam-bemitory', ['data' => $data]);
        return $pdf->download('sp-bemitory.pdf');

    }
}
