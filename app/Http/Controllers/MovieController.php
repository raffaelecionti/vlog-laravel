<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieEditRequest;
use App\Http\Requests\MovieRequest;
use App\Models\Movie;
//use Illuminate\Http\Request;
//use Illuminate\Http\Request;
// Illuminate\Http\Request;

//use Illuminate\Http\Request;

class MovieController extends Controller
{

public function destroy (Movie $movie){
  $movie->delete();
  return redirect()->route('homepage')->with('successMessage', 'hai correttamente eliminato il film');
}

public function update (MovieEditRequest $request, Movie $movie){
  $movie->update([
    $movie->title = $request->title,
    $movie->director = $request->director,
    $movie->year = $request->year,
    $movie->plot = $request->plot,
  ]);
 
    
  if($request->hasFile('img')){
    // 1. Carica il file e ottieni il percorso
    $path = $request->file('img')->store('public/images');
    
    // 2. Aggiorna l'attributo del modello con il nuovo percorso
    $movie->img = $path;
    
    // 3. SALVA le modifiche nel database
    $movie->save();
}

  return redirect()->route('homepage')->with('successMessage', 'hai correttamente modificato il film');
}


public function edit (Movie $movie){
  return view('movie.edit', compact ('movie'));
}

public function show(Movie $movie){
return view('movie.show', compact('movie'));
}

public function index (){
  $movies= Movie::all();
  return view ('movie.index', compact ('movies'));
}

public function store (MovieRequest $request) {
$movie= Movie::create([
  'title' => $request->title,
  'director' => $request->director,
  'year' => $request->year,
  'plot' => $request->plot,
  'img' => $request->file('img')->store('public/images'),
]);

return redirect()->route('homepage')->with('successMessage', 'hai inserito il tuo film preferito');
}
 
public function add (){
  return view ('movie.add');
}
        
    public  function movieList () {
       $movies = Movie::all();
    return view('movie.movies', ['movies' => $movies]);
}
//public function movieDetail ($id){  
      //  foreach ($this->movies as $movie){
          //  if ($id == $movie['id']){
            //    return view('movie.movie-detail', ['movie' => $movie]);

          //  }
        //}


public function create (){
  return view ('movie.create');
}
public function submit(MovieRequest $request){
$movie = Movie::create([
'title' => $request->title,
'director' => $request->director,
'year' => $request->year,
'plot' => $request->plot,
'img' => $request->file('img')->store('public/images'),
]);

return redirect()->route('homepage')->with('successMessage', 'hai correttamente inserito il tuo film');
}
}

