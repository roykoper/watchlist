@extends('layouts.app')

@section('content')

<h1>Watchlist</h1>

<button type="button" class="btn btn-primary" onclick="location.href='{{ url('watchlist/addmovie') }}'">Add Movie</button>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Year</th>
            <th scope="col">Genre</th>            
        </tr>
    </thead>   
    @foreach($movies as $movie)
        <tr>
            <td>{{$movie->name}}</td>
            <td>{{$movie->year}}</td>
            <td>{{$movie->genre}}</td>
            <td><a href="/watchlist/editmovie/{{ $movie->id }}"><img src="/images/pencil-edit-icon.png"></a></td>
            <form method="post" action="/watchlist/{{ $movie->id }}">
            @csrf
            @method('DELETE')
                <td><input type="image" src="/images/delete-icon.png" value="Delete"/></td>
            </form>
        </tr>
    @endforeach 
</table>
@endsection