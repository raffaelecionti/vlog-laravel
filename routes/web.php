<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'aboutus'])->name ('about-us');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('about-us-detail');

Route::get('/movies', [MovieController::class, 'movieList'])->name('movie.list');

Route::get('/movies/detail/{id}', [MovieController::class, 'movieDetail'])->name('movie.detail');

Route::get('/contatti', function() {
    return view ('contacts');
})->name('contacts');

Route::post('/contacts', [PublicController::class, 'contactUs'])->name('contactUs');

Route::get('/movies/create', [MovieController::class, 'create'])->name('movie.create');

Route::post('/movies/submit', [MovieController::class, 'submit'])->name('movie.submit');


