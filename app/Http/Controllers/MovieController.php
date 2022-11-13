<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function index(){

        $movies = Movie::all();

        $genres = Genre::all();

        // dd($movies);

        $carousels = $movies->slice(rand(0, $movies->count() - 4), 3);

        $populars = $movies->sortByDesc('release_date');

        return view('index', compact('movies', 'carousels', 'populars', 'genres'));
    }
}
