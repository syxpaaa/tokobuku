<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login', [loginController::class, 'login']);
Route::post('login', [loginController::class, 'ceklogin']);
Route::get('keluar', [loginController::class, 'keluar']);


Route::view('layout', 'adminlayot');
Route::get('/', [AdminController::class, 'index']);

Route::get('buku', [AdminController::class, 'buku']);
Route::get('buku/tambah',[AdminController::class,'tambahbuku']);
Route::post('buku/tambah',[AdminController::class,'cektambah']);