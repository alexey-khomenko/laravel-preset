<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\ProfileController;
use Modules\User\Http\Controllers\LoginController;
use Modules\User\Http\Controllers\RegisterController;
use Modules\User\Http\Controllers\ResetController;

Route::prefix(LaravelLocalization::setLocale())->middleware(['custom'])->group(function () {

    Route::prefix('profile')->group(function () {
        Route::get('', [ProfileController::class, 'index'])->name('profile');
        Route::post('/check', [ProfileController::class, 'check'])->name('profile.check');
    });

    Route::prefix('login')->group(function () {
        Route::get('', [LoginController::class, 'index'])->name('login');
        Route::post('/check', [LoginController::class, 'check'])->name('login.check');
    });

    Route::prefix('register')->group(function () {
        Route::get('', [RegisterController::class, 'index'])->name('register');
        Route::post('/check', [RegisterController::class, 'check'])->name('register.check');
    });

    Route::prefix('reset')->group(function () {
        Route::get('', [ResetController::class, 'index'])->name('reset');
        Route::post('/check', [ResetController::class, 'check'])->name('reset.check');
    });

    Route::get('/logout',  [LoginController::class, 'logout'])->name('logout');

});
