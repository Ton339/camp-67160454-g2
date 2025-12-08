<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.defaultPage');
});

Route::get('/html101', function () {
    return view('html101');
});

Route::get('/html102', function () {
    return view('html102');
});
