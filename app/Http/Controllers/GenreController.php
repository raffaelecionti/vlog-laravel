<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{

public function show(Genre $genre){
return view('genre.show', compact('genre'));
}


public function index(){
    $genres = Genre::all();
    return view('genre.index', compact('genres'));
}

    public function create(){
        return view('genre.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
   Genre::create([
    'name' => $request->name
   ]);
   return redirect()->route('homepage')->with('successMessage', 'hai creato la tua categoria!');
    }
}
