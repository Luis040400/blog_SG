<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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

Route::get('/', function () {
    return view('welcome');
});

//Usuarios
Route::get('/register',[RegisterController::class, 'create'])->name('auth.register');
Route::post('/register',[RegisterController::class, 'store'])->name('auth.store');

Route::get('/login',[SessionController::class, 'create'])->name('auth.login');
Route::post('/login',[SessionController::class, 'store'])->name('auth.ingresar');





//Esto es del post

Route::get('/post',[PostController::class, 'index'])->name('post');
Route::get('/post/crear',[PostController::class, 'crear'])->name('post.crear');

Route::post('/post',[PostController::class, 'store'])->name('post');


Route::get('/post/{id}',[PostController::class, 'show'])->name('post.edit');
Route::patch('/post/{id}',[PostController::class, 'update'])->name('post.update');
Route::delete('/post/{id}',[PostController::class, 'destroy'])->name('post.delete');

