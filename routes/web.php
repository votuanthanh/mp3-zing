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


Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index');

    Route::post('/login', 'UserController@login');

    Route::post('/register', 'UserController@register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/singer/create', 'SingerController@create')->name('singer.create');
Route::post('/singer/store', 'SingerController@store')->name('singer.store');

Route::get('/composer/create', 'ComposerController@create')->name('composer.create');
Route::post('/composer/store', 'ComposerController@store')->name('composer.store');
