<?php

Route::get('/scrape-cats', 'ImageCollectController@cats');
Route::get('/scrape-items', 'ImageCollectController@items');
Route::get('/scrape-icons', 'ImageCollectController@icons');

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/search', 'HomeController@search')
    ->name('search');

Route::get('/{lev1}/{lev2?}/{lev3?}', 'HomeController@list')
    ->name('list');
