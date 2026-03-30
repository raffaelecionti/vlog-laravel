 <x-layout>
<div class="container-fluid">
    <div class="row justify-content-center py-5">
        <h2 class="display-4 text-center text-color py-5">Esplora per genere cinematografico</h2>
        @foreach ($genres as $genre)
            <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
               <a href="{{ route('genre.show', compact('genre')) }}" class="h-100 w-100">
                <div class="box mx-auto d-flex justify-content-center align-items-center">
                    <h3 class="text-color text-capitalize">{{genre->name}}</h3> 
                </div>

               </a>
            </div>
        @endforeach
    </div>
</div>

    <x-layout/>