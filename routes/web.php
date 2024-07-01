<?php

use App\Http\Controllers\Auth\AuthController;

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'view'])->name('auth.view');
});
