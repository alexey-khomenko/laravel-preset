<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

// todo Route::permanentRedirect('/auth', '/auth/login');
// todo / в конце ссылки

Route::prefix('auth')->name('auth.')->group(function () {

    Route::prefix('login')->group(function () {
        Route::get('/', 'Auth\LoginController@index')->name('login');
        Route::post('/', 'Auth\LoginController@login');
    });

    Route::prefix('register')->group(function () {
        Route::get('/', 'Auth\RegisterController@index')->name('register');
        Route::post('/', 'Auth\RegisterController@register');
    });

    Route::prefix('reset')->group(function () {
        Route::get('/', 'Auth\ResetController@index')->name('reset');
        Route::post('/', 'Auth\ResetController@reset');
    });

    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});