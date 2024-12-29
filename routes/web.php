<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
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
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/login-proses', [AuthController::class, 'auth'])->name('auth.login-proses');

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/register-proses', [AuthController::class, 'register-proses'])->name('auth.register-proses');

Route::resource('dashboard', DashboardController::class);
