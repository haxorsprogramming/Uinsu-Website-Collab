<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Admin_Page extends Controller
{
    public function loginpage()
    {
        return view('admin_panel.login.page_login');
    }
}
