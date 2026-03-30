<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

//rotte pubbliche
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'aboutus'])->name('about-us');
Route::get('/movie/index', [MovieController::class, 'movieList'])->name('movie.list');
Route::get('/movie/show/{movie}', [MovieController::class, 'movieDetail'])->name('movie.detail');

// GRUPPO ROTTE PROTETTE
Route::middleware(['auth'])->group(function () {
    Route::get('/contatti', [PublicController::class, 'contactus'])->name('contactus');
    Route::post('/contatti/submit', [PublicController::class, 'contactusSubmit'])->name('movie.submit');
    
    // Rotte per inserimento e gestione film
    Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
    Route::post('/movie/store', [MovieController::class, 'store'])->name('movie.store');
    Route::get('/movie/edit/{movie}', [MovieController::class, 'edit'])->name('movie.edit');
    Route::put('/movie/update/{movie}', [MovieController::class, 'update'])->name('movie.update');
    Route::delete('/movie/delete/{movie}', [MovieController::class, 'destroy'])->name('movie.delete');
    Route::get('/profile', [PublicController::class, 'profile'])->name('user.profile');
    Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
    Route::post('/genre/store', [GenreController::class, 'store'])->name('genre.submit');
    Route::get('/genre/index', [GenreController::class, 'index'])->name('genre.index');
    Route::get('/genre/show/{genre}', [GenreController::class, 'show'])->name('genre.show');
});