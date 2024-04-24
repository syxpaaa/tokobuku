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

Route::get('buku',[AdminController::class, 'buku']);
Route::get('buku/tambah',[AdminController::class,'tambahbuku']);
Route::post('buku/tambah',[AdminController::class,'cektambah']);
Route::get('buku/edit/{id}',[AdminController::class, 'edit']);
Route::post('buku/edit/{id}',[AdminController::class, 'update']);
Route::get('buku/hapus/{id}',[AdminController::class, 'hapus']);

Route::get('kasir', [adminController::class, 'kasir']);
Route::get('kasir/tambah', [adminController::class, 'tambahpetu']);
Route::post('kasir/tambah', [adminController::class, 'simpen']);
Route::get('kasir/edit/{id}', [adminController::class, 'edi']);
Route::post('kasir/edit/{id}', [adminController::class, 'upda']);
Route::get('kasir/hapus/{id}', [adminController::class, 'hapu']);