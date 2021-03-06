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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/watchlist', 'WatchlistController@index')->name('watchlist');

    Route::get('/watchlist/addmovie', function () {
        return view('watchlist/addmovie');
    })->name('addmovie');

    //Route::get('/watchlist/addmovie', 'WatchlistController@addMovie')->name('addmovie');
    
    Route::get('/watchlist/editmovie/{id}', 'WatchlistController@editmovie')->name('editmovie');
    
    Route::post('/watchlist', 'WatchlistController@storemovie')->name('storemovie');
    
    Route::post('/watchlist/updatemovie', 'WatchlistController@updatemovie')->name('updatemovie');
    
    Route::put('/watchlist', 'WatchlistController@putmovie')->name('putmovie');
    
    Route::delete('/watchlist/{id}', 'WatchlistController@deletemovie')->name('deletemovie');
});