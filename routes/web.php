<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'WebController@about')->name('about_us');
Route::get('/news/{id}', 'WebController@news')->name('news');
Route::get('/event/{id}', 'Webcontroller@event')->name('event');
Route::get('/courses','WebController@course')->name('our_courses');
Route::match(['get', 'post'], '/contact', 'WebController@contact')->name('contact_us');
