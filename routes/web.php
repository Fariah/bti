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
Route::model('news', 'App\News');

Route::get('/', 'FrontController@home')->name('home');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/contact', 'FrontController@contact')->name('contact');


Route::get('/register', 'AuthController@getRegister');
Route::post('/register', 'AuthController@postRegister');
;
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@getLogout');
//Route::group(['middleware' => 'web'], function () {

//##################### News ##########################
Route::get('/news', 'NewsController@getindex');
//#####################################################


Route::get('/git-hub', 'AuthController@getRedirectToProvider');
Route::get('/git-hub-callback', 'AuthController@getHandleProviderCallback');

//});

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin', 'AdminController@index');

    Route::group(['namespace' => 'Admin'], function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace

        Route::get('/admin/news', 'NewsController@index');

        Route::post('/admin/getNewsGrid', 'NewsController@getNewsGrid');

        Route::get('/admin/news/add', 'NewsController@getAddNews');
        Route::post('/admin/news/add', 'NewsController@postAddNews');

        Route::get('/admin/news/edit/{news}', 'NewsController@getEditNews');
        Route::post('/admin/news/edit/{news}', 'NewsController@postEditNews');

        Route::get('/admin/news/delete/{news}', 'NewsController@getDeleteNews');
    });

});

