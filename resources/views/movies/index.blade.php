@extends('layouts.master')
  @section('content')
    <div class="container">
        <div class="row">
            <div>
                <h1>Movies</h1>
                @if(count($movies)>0)
                    @foreach ($movies as $movie)
                        <div class>
                            <h3><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h3>
                            <p>{{str_limit($movie->storyline, 60, '...')}} </p>
                        </div>
                    @endforeach
                @else 
                    <p>No posts found</p>
                @endif
            </div>
        <div>
        @include('layouts.sidebar')
    </div>  
  @endsection