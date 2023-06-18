<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});
