<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
// Illuminate\Http\Request;

//use Illuminate\Http\Request;

class MovieController extends Controller
{

        //public  $detail = [
       // ['id'=> '1'  , 'title' => 'Incontri ravvicinati del terzo tipo' , 'director' => 'S. Spielberg', 'img' => '/media/spielberg.jpg', 'genres' => 'Sci-fi' ],
      //['id'=> '2' , 'title' => '1917' , 'director' => 'S. Mendes' , 'img' => '/media/s.mendes.jpg' , 'genres' => 'Guerra'],
       // ['id'=> '3' , 'title' => 'Quei bravi ragazzi' , 'director' => 'M. Scorsese', 'img' => '/media/scorsese.jpg', 'genres' => 'Noir'],
          //['id'=>  '4', 'title' => 'Barbie' , 'director' => 'Coppola' , 'img' =>'/media/coppola.jpg' , 'genres' =>  'Avventura'],
           // ['id'=> '5' , 'title' => 'Lost in traslation', 'director' =>  'Gerwin', 'img' => '/media/gerwin.jpg' , 'genres' => 'Drammatico']
       // ]; 
        
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
public function store(MovieRequest $request){
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

