<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('backend.user.login');
});

Route::get('/register', function () {
    return view('backend.user.register');
});

Route::get('/forgot-password', function () {
    return view('backend.user.forgot_password');
});
