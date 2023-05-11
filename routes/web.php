<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/versi', function () {
    return view('welcome');
});

Route::get('/daftar_mahasiswa', function () {
    return view('daftar_mahasiswa');
});

Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
Route::match(['get', 'post'], '/detail_mahasiswa',[MahasiswaController::class, 'detail']);

Route::get('/', [AdminController::class, 'index']);
Route::get('/admin/anime',[AdminController::class,'anime']);
Route::get('/admin/fisika',[AdminController::class,'fisika']);
Route::get('/admin/senyawa',[AdminController::class,'senyawa']);
Route::get('/admin/lagu',[AdminController::class,'lagu']);
Route::get('/admin/game',[AdminController::class,'game']);
Route::get('/admin/postingan',[AdminController::class,'postingan']);
Route::get('/admin/postingan/{id}/edit',[AdminController::class,'edit_post'])->name('posts.id');
Route::put('/admin/postingan/{id}/edit',[AdminController::class,'update_post'])->name('posts.update');
Route::delete('/admin/postingan/{id}/delete',[AdminController::class,'delete_post'])->name('posts.delete');
Route::get('/admin/create_post',[AdminController::class,'create_post']);
Route::post('/admin/store_post',[AdminController::class,'store_post']);

Route::resource('/admin/user', UserController::class);