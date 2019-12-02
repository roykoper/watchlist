@extends('layouts.app')

@section('content')

<h1>Watchlist</h1>

<a class="btn btn-info" href="{{ route('addmovie') }}">Add Movie</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Year</th>
            <th scope="col">Genre</th>            
        </tr>
    </thead>   
    @foreach($watchlist->movies as $movie)
        <tr>
            <td>{{$movie->name}}</td>
            <td>{{$movie->year}}</td>
            <td>{{$movie->genre}}</td>
            <td><a href="{{ route('editmovie', $movie ) }}"><img src="/images/pencil-edit-icon.png"></a></td>
            <form action="{{ route('deletemovie', $movie) }}" method="POST">
                @csrf
                @method('DELETE')
                <td><input type="image" src="/images/delete-icon.png" value="Delete"/></td>
            </form>
        
        </tr>
    @endforeach 
</table>
@endsection