<?php

use Illuminate\Support\Facades\Route;

Route::prefix(LaravelLocalization::setLocale())->middleware(['custom'])->group(function () {

    Route::prefix('profile')->group(function () {
        Route::get('', 'ProfileController@index')->name('profile');
        Route::post('/check', 'ProfileController@check')->name('profile.check');
    });

    Route::prefix('login')->group(function () {
        Route::get('', 'LoginController@index')->name('login');
        Route::post('/check', 'LoginController@check')->name('login.check');
    });

    Route::prefix('register')->group(function () {
        Route::get('', 'RegisterController@index')->name('register');
        Route::post('/check', 'RegisterController@check')->name('register.check');
    });

    Route::prefix('reset')->group(function () {
        Route::get('', 'ResetController@index')->name('reset');
        Route::post('/check', 'ResetController@check')->name('reset.check');
    });

    Route::get('/logout', 'LoginController@logout')->name('logout');

});
