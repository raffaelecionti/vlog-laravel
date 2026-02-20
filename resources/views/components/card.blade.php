  <div class="card mb-3" style="width: 18rem;">
  <img src="{{ $movie['img'] }}" class="card-img-top cardImg" alt="poster di {{ $movie['title'] }}">
  <div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    <h5 class="card-title muted">{{ $movie['director'] }}</h5>
    <p class="card-text">{{ $movie['genres'] }}</p>
    <a href="{{ route('movie.detail', $movie['id']) }}" class="btn btn-primary">dettagli</a>
  </div>
</div>
          </div>