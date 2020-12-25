<?php

use components\Route;

Route::get('/', 'IndexController/home');
Route::get('/signin', 'IndexController/signin');
Route::get('/signup', 'IndexController/signup');
Route::get('/signout', 'UserController/signout');

Route::post('/signin', 'UserController/signin');
Route::post('/signup', 'UserController/signup');

Route::last('IndexController/home');