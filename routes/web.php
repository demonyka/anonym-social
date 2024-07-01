<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');
});

Route::middleware('auth')->group(function () {
    Route::prefix('/profile')->group(function () {
        Route::get('/{username}', function ($username) {
            return \App\Models\User::where('username', $username)->firstOrFail();
        })->name('profile.view');
    });
});
