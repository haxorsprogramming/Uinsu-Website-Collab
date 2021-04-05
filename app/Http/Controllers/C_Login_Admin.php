<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Login_Admin extends Controller
{
    public function proses_login()
    {
        $dr = ['status' => 'wrongPassword'];
        return \Response::json($dr);
    }
}
