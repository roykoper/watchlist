@extends('layouts.app')

@section('content')
<h1>Edit a Movie</h1>

<form method="POST" action="/watchlist/updatemovie">
  @csrf
  <input type="hidden" name='id' value="{{ $movie['id'] }}" />
  <div class="form-group">
    <label for="movieName">Name</label>
    <input type="text" class="form-control" value="{{ $movie['name'] }}" name="name" id="movieName" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="movieYear">Year</label>
    <input type="text" class="form-control" value="{{ $movie['year'] }}" name="year" id="movieYear" placeholder="Year">
  </div>
  <div class="form-group">
  <label for="movieGenre">Genre</label>
    <input type="text" class="form-control" value="{{ $movie['genre'] }}" name="genre" id="movieGenre" placeholder="Genre">
  </div>
  <input type="submit" value="Add New Movie To List">
</form>
@endsection