<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_Fakultas;

class C_Home extends Controller
{
    public function home()
    {
        $data = [
            'page' => 'home'
        ];
        return view('home.home', $data);
    }
    public function academic()
    {
        $dataFakultas = M_Fakultas::all();
        $data = [
            'page' => 'academic',
            'dataFakultas' => $dataFakultas
        ];
        return view('home.academic', $data);
    }
}
