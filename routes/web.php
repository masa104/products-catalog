<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/list', function () {
    return view('list');
})->name('list');

Route::get('/items', function () {
    return view('items');
})->name('items');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');
