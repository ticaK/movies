@extends('layouts.master')

  @section('content')

    <h3>Title:{{$movie->title}}</h3>
    <p>Genre:{{$movie->genre}}</p>
    <p>Director:{{$movie->director}}</p>
    <p>Year:{{$movie->year}}</p>
    <p>Storyline:{{$movie->storyline}}</p>

  @endsection
