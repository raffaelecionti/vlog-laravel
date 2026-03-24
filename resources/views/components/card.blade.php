  <div class="card mb-3" style="width: 18rem;">
    @if (!$movie->img)
      <img src="{{Storage::url($movie->img)}}" class="card-img-top cardImg" alt="poster di {{ $movie->title }}">
    @else
    <img src="{{ Storage::url($movie->img) }}" class="card-img-top cardImg" alt="poster di '{{ $movie->title }}'">
    @endif
  <div class="card-body">
    <h5 class="card-title">Titolo:{{ $movie->title }}</h5>
    <h5 class="card-title muted">Regista:{{ $movie->director }}</h5>
    <p class="card-text">Anno:{{ $movie->year }}</p>
    <p>creato da:{{ $movie->user->name }}</p>
    <a href="{{ route('movie.show' , compact ('movie')) }}" class="btn btn-primary">leggi di piu</a>
     @auth
         
     
     @if ($movie->user_id == Auth::id())
         <a href="{{ route('movie.edit' , compact ('movie')) }}" class="btn btn-primary">modifica il film</a>
     @endif
     @endauth
  </div>
</div>
</div>






