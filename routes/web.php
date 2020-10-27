<?php

use Illuminate\Support\Facades\Route;

// todo / в конце ссылки

Route::prefix(LaravelLocalization::setLocale())->group(function () {

    Route::get('', 'HomeController@index')->name('home');

    Route::namespace('Auth')->group(function () {

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
});