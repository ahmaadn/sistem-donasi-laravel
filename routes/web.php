<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('donate', DonateController::class);

// Auth
Route::get('/auth/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth/login-proses', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout.auth');

Route::resource('register', RegisterController::class);
Route::resource('dashboard', DashboardController::class);
