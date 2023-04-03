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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/daftar_mahasiswa', function () {
    return view('daftar_mahasiswa');
});

use App\Http\Controllers\MahasiswaController;
Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
Route::match(['get', 'post'], '/detail_mahasiswa',[MahasiswaController::class, 'detail']);

use App\Http\Controllers\AdminController;
Route::get('/', [AdminController::class, 'index']);
Route::get('/admin/anime',[AdminController::class,'anime']);
Route::get('/admin/fisika',[AdminController::class,'fisika']);
Route::get('/admin/senyawa',[AdminController::class,'senyawa']);
Route::get('/admin/lagu',[AdminController::class,'lagu']);
Route::get('/admin/game',[AdminController::class,'game']);