<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login-proses', [AuthController::class, 'auth'])->name('login-proses');


    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register-proses', [AuthController::class, 'register_proses'])->name('register-proses');
});


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/profile', [ProfileController::class, 'index'])->name('dashboard.profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('dashboard.update-profile');

    // Admin
    Route::group(['middleware' => ['user-access:admin'], 'as' => 'admin.'], function () {
        // Manage User
        Route::resource('manage-user', UserController::class);

        Route::resource('manage-campaigns', CampaignsController::class);
    });
});
