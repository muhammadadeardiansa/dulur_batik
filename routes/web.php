<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WanitaController;
use App\Http\Controllers\PriaController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\DashboardController;
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

Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/wanita', [WanitaController::class,'index'])->name('wanita');
Route::get('/pria', [PriaController::class,'index'])->name('pria');
Route::get('/anak', [AnakController::class,'index'])->name('anak');
