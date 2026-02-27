 <x-layout>
    <div class="container mt-5">
    <div class="row g-4">

        @foreach($movies as $movie)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="{{ $movie['img'] }}" class="card-img-top" alt="{{ $movie['title'] }}">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <p>{{ $movie['director'] }}</p>
                        <p>{{ $movie['genres'] }}</p>
                        <a href="{{ route('movie.detail', $movie['id']) }}" 
                           class="btn btn-primary">
                           dettagli
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
</x-layout>