<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.register');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $validData['password'] = bcrypt($validData['password']);

        User::create($validData);

        $request->session()->flash('Registrasi Sukses','Registrasi Berhasil, Silakan login.');

        return redirect('/login');
    }
}
