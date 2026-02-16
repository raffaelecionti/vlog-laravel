<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home-page');

Route::get('/chi-siamo', function () {
    $users = [
    ['name' => 'Mario', 'surname' => 'Rossi', 'role' => 'Founder & CEO', ],
    ['name' => 'Luigi', 'surname' => 'Bianchi', 'role' => 'Content Manager', ],
    ['name' => 'Giulia', 'surname' => 'Verdi', 'role' => 'Social Media Manager', ],
    ];
    return view('about-us', ['users' => $users]);
})->name ('about-us');

Route::get('/chi-siamo/detail/{name}', function ($name) {
    $users = [
        ['name' => 'Mario', 'surname' => 'Rossi', 'role' => 'Founder & CEO', ],
        ['name' => 'Luigi', 'surname' => 'Bianchi', 'role' => 'Content Manager', ],
        ['name' => 'Giulia', 'surname' => 'Verdi', 'role' => 'Social Media Manager', ],
    ];
    foreach ($users as $user) {
        if ($user['name'] === $name) {
            return view('about-us-detail', ['user' => $user]);
        }
    };
})->name('about-us-detail');

Route::get('/contatti', function () {
    return view ('contacts');
})->name('contacts');


Route::get('/movies', function () {
    $movies = [
        ['id'=> '1'  , 'title' => 'Incontri ravvicinati del terzo tipo' , 'director' => 'S. Spielberg', 'img' => '/media/spielberg.jpg', 'genres' => 'Sci-fi' ],
      ['id'=> '2' , 'title' => '1917' , 'director' => 'S. Mendes' , 'img' => '/media/s.mendes.jpg' , 'genres' => 'Guerra'],
        ['id'=> '3' , 'title' => 'Quei bravi ragazzi' , 'director' => 'M. Scorsese', 'img' => '/media/scorsese.jpg', 'genres' => 'Noir'],
          ['id'=>  '4', 'title' => 'Barbie' , 'director' => 'Coppola' , 'img' =>'/media/coppola.jpg' , 'genres' =>  'Avventura'],
            ['id'=> '5' , 'title' => 'Lost in traslation', 'director' =>  'Gerwin', 'img' => '/media/gerwin.jpg' , 'genres' => 'Drammatico']
        ];
        return view('movie.movies', ['movies' => $movies]);
})->name('movie.list');

Route::get('/movies/detail/{id}', function ($id){
   $movies = [
        ['id'=> '1'  , 'title' => 'Incontri ravvicinati del terzo tipo' , 'director' => 'S. Spielberg', 'img' => '/media/spielberg.jpg', 'genres' => 'Sci-fi' ],
      ['id'=> '2' , 'title' => '1917' , 'director' => 'S. Mendes' , 'img' => '/media/s.mendes.jpg' , 'genres' => 'Guerra'],
        ['id'=> '3' , 'title' => 'Quei bravi ragazzi' , 'director' => 'M. Scorsese', 'img' => '/media/scorsese.jpg', 'genres' => 'Noir'],
          ['id'=>  '4', 'title' => 'Barbie' , 'director' => 'Coppola' , 'img' =>'/media/coppola.jpg' , 'genres' =>  'Avventura'],
            ['id'=> '5' , 'title' => 'Lost in traslation', 'director' =>  'Gerwin', 'img' => '/media/gerwin.jpg' , 'genres' => 'Drammatico']
        ];   
        foreach ($movies as $movie){
            if ($id == $movie['id']){
                return view('movies.movie-detail', ['movie' => $movie]);
            }
        }
})->name('movie.detail');


