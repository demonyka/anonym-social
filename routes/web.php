<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'view'])->name('auth.view');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
});
