<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class WatchlistController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();

        return view('watchlist', ['movies' => $movies] );
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

    //edit
    public function editMovie($movieId) 
    {
        $movie = Movie::where('id', $movieId)->first();

        if($movie == null)
            return;

        return view('watchlist/editmovie', ['movie' => $movie]);
    }

    public function updateMovie()
    {
        Movie::where('id', request('id'))->update(
            ['name' => request('name')],
            ['year' => request('year')],
            ['genre' => request('genre')]
        );

        return redirect('/watchlist');
    }    

    public function deleteMovie($movieId)
    {
        Movie::where('id', $movieId)->delete();

        return redirect('/watchlist');
    }
}
