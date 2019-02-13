<div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        @foreach ($movies as $movie)
            <a href="/movies/{{$movie->id}}">{{$movie->title}}</a>
        @endforeach
      </div>
</div>


