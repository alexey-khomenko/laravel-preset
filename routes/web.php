<?php

use Illuminate\Support\Facades\Route;

Route::prefix(LaravelLocalization::setLocale())->middleware(['web', 'custom'])->group(function () {
    Route::get('', 'HomeController@index')->name('home');
});