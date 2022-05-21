<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UbahProfilController extends Controller
{
    public function index(Request $request){

        $users  = User::find(auth()->user()->username);
        return view('user.profil',compact('users'));
    }

    public function ubahprofil(Request $request){

        $data = User::find(auth()->user()->username);
        return view('user.ubahprofil',compact('data'));
    }
 
    public function updatepropil(Request $request){

        $data = User::all();

        $data->update($request->all());

        return redirect()->route('profil')->with('succes','Update Data Berhasil');
    }
}
