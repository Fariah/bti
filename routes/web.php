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

Route::get('/', 'FrontController@home')->name('home');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/contact', 'FrontController@contact')->name('contact');


Route::get('/register', 'AuthController@getRegister');
Route::post('/register', 'AuthController@postRegister')
;
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@getLogout');
//Route::group(['middleware' => 'web'], function () {

Route::get('/git-hub', 'AuthController@getRedirectToProvider');
Route::get('/git-hub-callback', 'AuthController@getHandleProviderCallback');

//});

//Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', 'AdminController@index');

//});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
