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

use App\Http\Controllers\CateogryController;

Route::get('/', 'CateogryController@index')->name('home');
// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/{firstCat}', 'CateogryController@category')
// ->name('category');
Route::get(
    '/{firstCat:slug}/{secondCat:slug?}',
    'CateogryController@category'
)->name('category');

// Route::get('/items', function () {
//     return view('items');
// })->name('items');

// Route::get('/detail', function () {
//     return view('detail');
// })->name('detail');

// Route::get('/cats', 'CateogryController@index')->name('cats');
