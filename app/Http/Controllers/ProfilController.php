<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function index(){
        $users  = User::all();
        return view('user.profil',compact('users'));
    }
}
