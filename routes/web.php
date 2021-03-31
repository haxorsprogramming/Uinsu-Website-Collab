<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Admin_Page;

Route::get('/', [C_Home::class, 'home']);
Route::get('/academic', [C_Home::class, 'academic']);

/**
 * Admin Stack
 */
Route::get('/manage', [C_Admin_Page::class, 'loginpage']);