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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Watchlist
Route::get('/watchlist', 'WatchlistController@index')->name('watchlist');

Route::get('/watchlist/addmovie', function () {
    return view('watchlist/addmovie');
});

//Route::get('/watchlist/addmovie', 'WatchlistController@addmovie')->name('addmovie');

Route::post('/watchlist', 'WatchlistController@storemovie')->name('storemovie');

Route::put('/watchlist', 'WatchlistController@putmovie')->name('putmovie');

Route::delete('/watchlist', 'WatchlistController@deletemovie')->name('deletemovie');