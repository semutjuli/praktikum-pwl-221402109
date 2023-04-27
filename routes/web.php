<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'index']);

// Route::get('/index', [AdminController::class, 'index']);

Route::get('/dashboard', [AdminController::class, 'dashboard']);

Route::get('/postingan', [AdminController::class, 'postingan']);

Route::get('/arsip', [AdminController::class, 'arsip']);

Route::get('/pengaturan', [AdminController::class, 'pengaturan'])
;
Route::get('/logout', [AdminController::class, 'logout']);

// Route::get
