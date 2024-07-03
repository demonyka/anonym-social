<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Profile\ProfileController;

Route::get('/', function () {
    $user = auth()->user();
    if ($user) {
        return redirect()->route('profile.view', $user->username);
    }
    return redirect()->route('auth.view');
});

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'view'])->name('auth.view');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::put('/register', [RegisterController::class, 'register'])->name('auth.register');
});

Route::middleware('auth')->group(function () {
    Route::any('/logout', [LoginController::class, 'logout'])->name('auth.logout');

    Route::prefix('/profile')->group(function () {
        Route::get('/{username}', [ProfileController::class, 'view'])->name('profile.view');
    });
});
