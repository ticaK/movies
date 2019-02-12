@extends('layouts.master')

  @section('content')

    <h3>Title:{{$movie->title}}</h3>
    <p>Genre:{{$movie->genre}}</p>
    <p>Director:{{$movie->director}}</p>
    <p>Year:{{$movie->year}}</p>
    <p>Storyline:{{$movie->storyline}}</p>

    <h4>Comments:</h4>
    @foreach($movie->comments as $comment)
    <div class="p-4 alert alert-success">
        {{$comment->content}} <br>
        {{$comment->created_at}}<br>
    </div>
    @endforeach

    <div class="container">
            <form method = "POST" action = "{{route('movies.comment',['id'=>$movie->id])}}"> 
               @csrf
                
                      <div class="form-group row">
                        <label for="textarea" class="col-4 col-form-label">Comment</label>
                        <textarea
                          id="textarea"
                          name="text"
                          cols="40"
                          rows="5"
                          class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}"></textarea>
                          @include('partials.invalid-feedback', ['field' => 'text'])
                      
                  </div>
        
                  <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
        
            </form>
        </div>



  @endsection
