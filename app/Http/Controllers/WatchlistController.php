<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Watchlist;
use Auth;

class WatchlistController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index() 
    {
        $watchlist = Watchlist::where('user_id', Auth::id())->with('movies')->first();

        return view('watchlist.watchlist', compact('watchlist'));
    }

    public function storeMovie()
    {
        $movie = new Movie();

        $movie->watchlist_id = Watchlist::where('user_id', Auth::id())->first()->id;
        $movie->name = request('name');
        $movie->year = request('year');
        $movie->genre = request('genre');

        $movie->save();

        return redirect()->route('watchlist');
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

        return redirect()->back();
    }    

    public function deleteMovie($movieId)
    {
        Movie::find($movieId)->delete();

        return redirect()->back();
    }
}
