<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index',[
            'title' => 'Peduliaalam'
        ]);
    }
    public function login(){
        return view('Auth.login',[
            'title' => 'Peduliaalam - Masuk'
        ]);
    }
}
