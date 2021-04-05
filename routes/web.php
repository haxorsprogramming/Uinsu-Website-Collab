<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Admin_Page;
use App\Http\Controllers\C_Login_Admin;

Route::get('/', [C_Home::class, 'home']);
Route::get('/academic', [C_Home::class, 'academic']);

/**
 * Admin Panel
 */
Route::get('/manage', [C_Admin_Page::class, 'loginpage']); # login admin page
Route::post('/manage/login/proses', [C_Login_Admin::class, 'proses_login']); # proses login