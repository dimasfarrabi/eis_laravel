<?php

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

Route::get('/', function () {
    // return view('welcome');
    return Redirect::to('/login');
});

// Auth::routes();
// Route::get('login',[AuthController::class,'index'])->name('login');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login',[App\Http\Controllers\AuthController::class,'index'])->name('login');
Route::get('register',[App\Http\Controllers\AuthController::class,'register'])->name('register');
Route::get('dashboard',[App\Http\Controllers\AuthController::class,'dashboard'])->name('dashboard');
Route::post('proses_login',[App\Http\Controllers\AuthController::class,'proses_login'])->name('proses.login');
Route::post('proses_register',[App\Http\Controllers\AuthController::class,'proses_register'])->name('proses.register');
Route::post('logout',[App\Http\Controllers\AuthController::class,'logout'])->name('logout');