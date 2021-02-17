<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function home()
    {
        return view('home.home');
    }
    public function academic()
    {
        return view('home.academic');
    }
}
