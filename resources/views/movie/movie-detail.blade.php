  <x-layout>
   
<header> 
    <div class="container-fluid movies">
        <div class="row h-100 justify-content-center">
            <div class="row">
                <h2 class=" display-5 text-center text-white text-color">dettagli del film: {{ $movie['title'] }}</h2>
            </div>
         <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
          <h3> titolo: {{ $movie['title'] }}</h3>
          <h4>regista: {{ $movie['director'] }}</h4>
          <p> genere: {{ $movie['genres'] }}</p>
         </div>
         <div class="col-12 col-md-6 d-flex justify-content-center">
          <img src="{{ $movie['img'] }}" alt="Poster di {{ $movie['title'] }}">
         </div>
        </div>

            
    </div>
</x-layout>