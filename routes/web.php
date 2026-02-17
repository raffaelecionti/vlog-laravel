<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'homepage'])->name('home-page');

Route::get('/chi-siamo', [PublicController::class, 'aboutus'])->name ('about-us');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('about-us-detail');

Route::get('/contatti', function () {
    return view ('contacts');
})->name('contacts');


Route::get('/movies', [MovieController::class, 'movieList'])->name('movie.list');

Route::get('/movies/detail/{id}', [MovieController::class, 'movieDetail'])->name('movie.detail');

use App\Http\Controllers\PublicController;

Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('about-us');
Route::get('/', [PublicController::class, 'homepage'])->name('home-page');
Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('about-us-detail');

use App\Http\Controllers\MovieController;
Route::get('/movies', [MovieController::class, 'movieList'])->name('movie.list');
Route::get('/movies/detail/{id}', [MovieController::class, 'movieDetail'])->name('movie.detail');




