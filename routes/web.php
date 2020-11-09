<?php

use Illuminate\Support\Facades\Route;

Route::prefix(LaravelLocalization::setLocale())->middleware(['custom'])->group(function () {
    Route::get('', 'HomeController@index')->name('home');
});