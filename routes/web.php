<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;

Route::middleware('auth')->group(function () {
Route::get('/',[PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'aboutus'])->name ('about-us');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('about-us-detail');

Route::get('/movies', [MovieController::class, 'movieList'])->name('movie.list');

Route::get('/movies/detail/{id}', [MovieController::class, 'movieDetail'])->name('movie.detail');
});


Route::get('/contatti', function() {
    return view ('contacts');
})->name('contacts');

Route::post('/contacts', [PublicController::class, 'contactUs'])->name('contactUs');

Route::get('/movies/create', [MovieController::class, 'create'])->name('movie.create');

Route::post('/movies/submit', [MovieController::class, 'submit'])->name('movie.submit');

Route::get('/movie/add', [MovieController::class, 'add'])->name('movie.add');

Route::post('/movie/add/sending', [MovieController::class, 'store'])->name('movie.sending');

Route::get('/movie/index', [MovieController::class, 'index'])->name('movie.index');

Route::get('/movie/show/{movie}', [MovieController::class, 'show'])->name('movie.show');

Route::get('/movie/edit/{movie}', [MovieController::class, 'edit'])->name('movie.edit');

Route::put('/movie/update/{movie}', [MovieController::class, 'update'])->name('movie.update');

Route::delete('/movie/delete/{movie}', [MovieController::class, 'destroy'])->name('movie.delete');




