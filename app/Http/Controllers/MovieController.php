<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id')->get();

        return view('movies.index', compact('movies'));
    }

    public function show(Movie $movie)
    {
        $others = Movie::where('id', '!=', $movie->id)->inRandomOrder()->take(4)->get();

        return view('movies.show', compact('movie', 'others'));
    }
}
