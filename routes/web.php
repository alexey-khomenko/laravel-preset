<?php

use Illuminate\Support\Facades\Route;

// todo / в конце ссылки

//Route::middleware('web')->group(function () {

Route::prefix('login')->group(function () {
    Route::get('', 'Auth\LoginController@index')->name('login');
    Route::post('/check', 'Auth\LoginController@check')->name('login.check');
});

Route::prefix('register')->group(function () {
    Route::get('', 'Auth\RegisterController@index')->name('register');
    Route::post('/check', 'Auth\RegisterController@check')->name('register.check');
});

Route::prefix('reset')->group(function () {
    Route::get('', 'Auth\ResetController@index')->name('reset');
    Route::post('/check', 'Auth\ResetController@check')->name('reset.check');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('', 'HomeController@index')->name('home');
//});