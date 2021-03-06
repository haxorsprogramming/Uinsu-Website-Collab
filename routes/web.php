<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Admin_Page;
use App\Http\Controllers\C_Login_Admin;
use App\Http\Controllers\C_Fakultas_Admin;
use App\Http\Controllers\C_Beranda_Admin;

Route::get('/', [C_Home::class, 'home']);
Route::get('/academic', [C_Home::class, 'academic']);

/**
 * Admin Panel
 */
Route::get('/manage', [C_Admin_Page::class, 'loginpage']); # login admin page
Route::post('/manage/login/proses', [C_Login_Admin::class, 'proses_login']); # proses login

Route::get('/manage/dashboard', [C_Admin_Page::class, 'dashboard']);

Route::get('/manage/beranda/page', [C_Beranda_Admin::class, 'beranda']);

Route::get('/manage/fakultas/list', [C_Fakultas_Admin::class, 'list']);