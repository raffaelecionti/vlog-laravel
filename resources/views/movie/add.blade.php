<x-layout>
    <div class="container-fluid movies">
        <div class="rowm justify-content-center">
            <div class="col-12 col-md-8 text-white text-color">
                <h2 class="display-4 text-center">Inserisci il tuo film preferito</h2>
                <form method="POST" action="{{route('movie.sending')}}" enctype="multipart/form-data">
                    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Titolo:</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="director" class="form-label">Regista:</label>
    <input type="text" name="director" class="form-control" id="director">
  </div>
   <div class="mb-3">
    <label for="year" class="form-label">Anno di uscita:</label>
    <input type="text" name="year" class="form-control" id="year">
  </div>
   <div class="mb-3">
    <label for="plot" class="form-label">Trama:</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>
   <div class="mb-3">
    <label for="img" class="form-label">Poster:</label>
    <input type="file" name="img" class="form-control" id="img">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
</x-layout>


