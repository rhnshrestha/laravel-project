<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[AuthController::class, 'showLogin'])->name('backend.showlogin');
Route::post('/login',[AuthController::class, 'login'])->name('backend.login');


Route::get('/register',[AuthController::class, 'showRegister'])->name('backend.showregister');
Route::post('/register',[AuthController::class, 'register'])->name('backend.register');

Route::get('/backend/dashboard', [DashboardController::class, 'index'])->name('backend.dashboard.index')->middleware('auth');
Route::post('/logout',[AuthController::class, 'logout'])->name('backend.logout');

Route::get('/backend/setting', [SettingController::class, 'index'])->name('backend.setting.index')->middleware('auth');


// Route::get('/forgot-password', function () {
//     return view('backend.user.forgot_password');
// });

// Route::get('/backend/dashboard', function () {
//     return view('backend.dashboard.index');
// });

// Route::get('/backend/dashboard', function () {
//     return view('backend.dashboard.index');
// });

Route::get('/backend/category/create', function () {
    return view('backend.category.create');
});

Route::get('/backend/category', function () {
    return view('backend.category.index');
});