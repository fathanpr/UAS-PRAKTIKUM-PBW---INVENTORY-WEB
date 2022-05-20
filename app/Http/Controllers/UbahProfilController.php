<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UbahProfilController extends Controller
{
    public function index(){
        return view('user.ubahprofil');
    }

    public function ubahprofil(Request $request, $username){
        $data = User::find($username);
        $data->update($request->all());

        return redirect()->route('profil')->with('success','Data berhasil diupdate'); 
    }
}
