<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/userform', function () {
    return view('userform');
});

Route::get('/html102', function () {
    return view('html102');
});

Route::get('/mycontroller', [App\Http\Controllers\Mycon::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\Mycon::class, 'process']);

Route::get('/user', [App\Http\Controllers\user::class, 'index']);
Route::post('/user', [App\Http\Controllers\user::class, 'store']);
