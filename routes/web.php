<?php

use components\Route;

Route::get('/', 'IndexController/home');
Route::get('/page/(\d*)', 'IndexController/page/$1');

Route::last('IndexController/home');