<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Matrivumiit\Contact\Http\Controllers'], function () {

    Route::get('/contact', 'ContactController@contactForm')->name('form');

    Route::post('/contact', 'ContactController@store')->name('message');
});
