<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class WatchlistController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();

        return view('watchlist', ['movies' => $movies]);
    }

    public function storeMovie()
    {
        $movie = new Movie();

        $movie->name = request('name');
        $movie->year = request('year');
        $movie->genre = request('genre');

        $movie->save();

        return redirect('/watchlist');
    }

    public function putMovie()
    {
        $movie = Movie::where('id', request('id'));

        return view('/watchlist/editmovie', ['movie' => $movie]);
    }
}
