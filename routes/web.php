<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('soad', function () {
    return 'welcome to my first web page';
});

Route::get('soad/{id}', function ($id) {
    return 'this is  a parameter ' . $id ;
});