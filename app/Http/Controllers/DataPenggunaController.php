<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DataPenggunaController extends Controller
{
    public function index(){
        $users  = User::all();
        return view('admin.datapengguna',compact('users'));
    }

    public function destroy($id) {
        User::destroy('DELETE FROM users WHERE id = ?', [$id]);
        return redirect('datapengguna');
    }
}
