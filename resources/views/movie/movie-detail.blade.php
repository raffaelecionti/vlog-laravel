  <x-layout>
   
<header>
    <div class="container-fluid movies">
        <div class="row h-100 justify-content-center align-items-center">
            
            <!-- Titolo -->
            <div class="col-12 text-center">
                <h2 class="display-5 text-color">
                    Dettagli del film: {{ $movie['title'] }}
                </h2>
            </div>

            <!-- Colonna Testo -->
            <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
                <h3>Titolo: {{ $movie['title'] }}</h3>
                <h4>Regista: {{ $movie['director'] }}</h4>
                <p>Genere: {{ $movie['genres'] }}</p>
            </div>

            <!-- Colonna Immagine -->
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img class="img-fluid" src="{{ $movie['img'] }}" alt="Poster di {{ $movie['title'] }}">
            </div>

        </div>
    </div>
</header>
</x-layout>