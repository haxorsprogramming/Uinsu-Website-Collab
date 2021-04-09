<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Fakultas_Admin extends Controller
{
    public function list()
    {
        return view('admin_panel.dashboard.fakultas.list');
    }
}
