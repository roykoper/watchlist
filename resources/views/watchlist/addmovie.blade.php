@extends('layouts.app')

@section('content')
<h1>Add a new Movie</h1>

<form method="POST" action="/watchlist">
  @csrf
  <div class="form-group">
    <label for="movieName">Name</label>
    <input type="text" class="form-control" name="name" id="movieName" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="movieYear">Year</label>
    <input type="text" class="form-control" name="year" id="movieYear" placeholder="Year">
  </div>
  <div class="form-group">
  <label for="movieGenre">Genre</label>
    <input type="text" class="form-control" name="genre" id="movieGenre" placeholder="Genre">
  </div>
  <input type="submit" value="Add New Movie To List">
</form>
@endsection