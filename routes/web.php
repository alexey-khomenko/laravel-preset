<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\RegisterController@login');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');