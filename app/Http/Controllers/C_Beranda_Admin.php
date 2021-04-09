<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Beranda_Admin extends Controller
{
    public function beranda()
    {
        return view('admin_panel.dashboard.beranda.beranda');
    }
}
