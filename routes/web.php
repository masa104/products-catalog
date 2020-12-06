<?php

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/search', 'HomeController@search')
    ->name('search');

Route::get('/{lev1}/{lev2?}/{lev3?}', 'HomeController@list')
    ->name('list');
