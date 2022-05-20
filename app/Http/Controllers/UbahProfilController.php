<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UbahProfilController extends Controller
{
    public function index(){
        $users  = User::all();
        return view('user.ubahprofil',compact('users'));
    }

    public function ubahprofil(Request $request, $username){
        $data = User::find($username);
        
        $data->update($request->all());

        return redirect()->route('profil')->with('success','Data berhasil diupdate'); 
    }
}
