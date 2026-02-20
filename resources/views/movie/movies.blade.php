 <x-layout>
    
<header> 
    <div class="container-fluid movies">
        <div class="row h-100 justify-content-center">
            <div class="row">
                <h2 class=" display-5 text-center text-white text-color">tutti i nostri film</h2>
            </div>
          @foreach ($movies as $movie)
          <div class="col-12 col-md-3 ">
           
        <x-card 
        :movie="$movie"
        title="{{$movie['title']}}"
        
        />
        </div>
          @endforeach
        

            
    </div>
</x-layout>