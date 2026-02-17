<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public $movies = [
        ['id'=> '1'  , 'title' => 'Incontri ravvicinati del terzo tipo' , 'director' => 'S. Spielberg', 'img' => '/media/spielberg.jpg', 'genres' => 'Sci-fi' ],
      ['id'=> '2' , 'title' => '1917' , 'director' => 'S. Mendes' , 'img' => '/media/s.mendes.jpg' , 'genres' => 'Guerra'],
        ['id'=> '3' , 'title' => 'Quei bravi ragazzi' , 'director' => 'M. Scorsese', 'img' => '/media/scorsese.jpg', 'genres' => 'Noir'],
          ['id'=>  '4', 'title' => 'Barbie' , 'director' => 'Coppola' , 'img' =>'/media/coppola.jpg' , 'genres' =>  'Avventura'],
            ['id'=> '5' , 'title' => 'Lost in traslation', 'director' =>  'Gerwin', 'img' => '/media/gerwin.jpg' , 'genres' => 'Drammatico']
        ];

        public  $detail = [
        ['id'=> '1'  , 'title' => 'Incontri ravvicinati del terzo tipo' , 'director' => 'S. Spielberg', 'img' => '/media/spielberg.jpg', 'genres' => 'Sci-fi' ],
      ['id'=> '2' , 'title' => '1917' , 'director' => 'S. Mendes' , 'img' => '/media/s.mendes.jpg' , 'genres' => 'Guerra'],
        ['id'=> '3' , 'title' => 'Quei bravi ragazzi' , 'director' => 'M. Scorsese', 'img' => '/media/scorsese.jpg', 'genres' => 'Noir'],
          ['id'=>  '4', 'title' => 'Barbie' , 'director' => 'Coppola' , 'img' =>'/media/coppola.jpg' , 'genres' =>  'Avventura'],
            ['id'=> '5' , 'title' => 'Lost in traslation', 'director' =>  'Gerwin', 'img' => '/media/gerwin.jpg' , 'genres' => 'Drammatico']
        ]; 
        
    public  function movieList () {
        return view('movie.movies', ['movies' => $this->movies]);
}
public function movieDetail ($id){  
        foreach ($this->movies as $movie){
            if ($id == $movie['id']){
                return view('movies.movie-detail', ['movie' => $movie]);
            }
        }
}
}
