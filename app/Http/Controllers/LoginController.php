<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function export(Request $req){
        if (Auth::attempt($req->only('name','password'))) {
            return redirect()->route('landing');
        }
        return view('Auth.login');
    }
}
