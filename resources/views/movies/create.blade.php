@extends('layouts.master')
@section('content')
    <div class = "container">
    <form method = "POST" action = "/movies">
        @csrf
        <div class="form-group">
            <label for="title" class="col-4 col-form-label">Title</label>
            <div class="col-8">
                <input id="title"
                name="title"
                type="text" 
                class="form-control {{$errors->has('title')? 'is-invalid' : ''}}"
                value = "{{ old('title') }}"/>
                @include('partials.invalid-feedback',['field'=>'title'])             
            </div>
        </div>

        <div class="form-group">
            <label for="genre" class="col-4 col-form-label">Genre</label>
            <div class="col-8">
                <input id="genre"
                name="genre"
                type="text" 
                class="form-control {{$errors->has('genre')? 'is-invalid' : ''}}"
                value = "{{ old('genre') }}"/>
                @include('partials.invalid-feedback',['field'=>'genre'])             
            </div>
        </div>
        <div class="form-group">
            <label for="director" class="col-4 col-form-label">Director</label>
            <div class="col-8">
                <input id="director"
                name="director"
                type="text" 
                class="form-control"
                value = "{{ old('director') }}"/>            
            </div>
        </div>
        <div class="form-group">
            <label for="year" class="col-4 col-form-label">Year</label>
            <div class="col-8">
                <input id="year"
                name="year"
                type="number" 
                min="1900"
                 max="2019"
                class="form-control"
                value = "{{ old('year') }}"/>            
            </div>
        </div>

        <div class="form-group">
        <label for="textarea" class="col-4 col-form-label">Storyline</label>
        <div class="col-8">
            <textarea id="textarea"
             name="storyline" 
             cols="40" 
             rows="5"
              class="form-control"> </textarea>
        </div>
        </div>
        <div class="form-group row">
        <div class="offset-4 col-8">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>

    </form>

@endsection