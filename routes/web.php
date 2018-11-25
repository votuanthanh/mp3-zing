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


Route::get('/singer/index', 'SingerController@index')->name('singer.index');
Route::get('/singer/create', 'SingerController@create')->name('singer.create');
Route::post('/singer/store', 'SingerController@store')->name('singer.store');

Route::get('/composer/index', 'ComposerController@index')->name('composer.index');
Route::get('/composer/create', 'ComposerController@create')->name('composer.create');
Route::post('/composer/store', 'ComposerController@store')->name('composer.store');

Route::get('/song/index', 'SongController@index')->name('song.index');
Route::get('/song/create', 'SongController@create')->name('song.create');
Route::post('/song/store', 'SongController@store')->name('song.store');



Route::get('/playlist/index', 'PlaylistController@index')->name('playlist.index');
Route::get('/playlist/showSong', 'PlaylistController@showSongPlaylist')->name('playlist.showSongPlaylist');
Route::get('/playlist/create', 'PlaylistController@create')->name('playlist.create');
Route::post('/playlist/store', 'PlaylistController@store')->name('playlist.store');


Route::get('/listening', 'ListeningController@index')->name('listening.index');
