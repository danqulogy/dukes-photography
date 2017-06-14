<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/formal', 'HomeController@getFormalPageView');
Route::get('/traditional', 'HomeController@getTraditionalPageView');
Route::get('/model_and_portrait', 'HomeController@getModelAndPortraitPageView');
Route::get('/frames', 'HomeController@getFramesPageView');
Route::get('/booking', 'HomeController@getBookingPageView');

Route::get('/booking/{booking_type}', 'HomeController@getBookingTypePageView');
Route::post('/booking', 'HomeController@postBookWeddingPageView');

Route::get('/booking-successfull', 'HomeController@getBookingSuccess');
Route::get('/contact', 'HomeController@getContactUsView');
Route::post('/contact', 'HomeController@postMessageView');

