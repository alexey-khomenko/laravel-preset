<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::prefix(LaravelLocalization::setLocale())->middleware(['custom'])->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('home');
});