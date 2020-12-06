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


Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/{lev1}/{lev2?}/{lev3?}', 'HomeController@list')
    ->name('list');

Route::get('/items', function () {
    return view('items');
})->name('items');

// Route::get('/detail', function () {
//     return view('detail');
// })->name('detail');

// Route::get('/cats', 'HomeController@index')->name('cats');
