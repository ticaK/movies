@extends('layouts.master')
  @section('content')
    <h1>Movies</h1>
    @if(count($movies)>0)
        @foreach ($movies as $movie)
            <div>
                <h3><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h3>
                <p>{{$movie->storyline}}</p>
            </div>
        @endforeach
    @else 
        <p>No posts found</p>
    @endif

    
@endsection