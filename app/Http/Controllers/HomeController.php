<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $latest = Movie::orderByDesc('release_year')->orderBy('title')->take(4)->get();
        $total = Movie::count();

        return view('home', compact('latest', 'total'));
    }
}
