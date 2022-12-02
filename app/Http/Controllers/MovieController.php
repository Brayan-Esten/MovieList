<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Actor;
use App\Models\Character;
use App\Models\GenreMovie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $movies = Movie::with('genres')->get();

        // dd($movies);

        $genres = Genre::all();

        $carousels = $movies->slice(rand(0, $movies->count() - 4), 3);

        $populars = $movies->sortByDesc('release_date');

        return view('movies.index', compact('movies', 'carousels', 'populars', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // dd('lol');
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.create', compact('genres', 'actors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => ['required', 'min:2', 'max:50'],
            'description' => ['required', 'min:8'],
            'genres' => ['required', 'array', 'min:1'],
            'actors' => ['required', 'array', 'min:1'],
            'actors.*' => ['required', 'numeric'],
            'characters' => ['required', 'array', 'min:1'],
            'characters.*' => ['required', 'string'],
            'director' => ['required', 'min:3'],
            'release_date' => ['required'],
            'thumbnail_url' => ['required', 'image'],
            'background_url' => ['required', 'image']
        ]);

        if($request->file('thumbnail_url')){
            $validated['thumbnail_url'] = $request->file('thumbnail_url')->store('img/thumbnails');
        }

        if($request->file('background_url')){
            $validated['background_url'] = $request->file('background_url')->store('img/backgrounds');
        }

        // dd($request->release_date);

        Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'director' => $request->director,
            'release_date' => $request->release_date->format('y'),
            'thumbnail_url' => $request->thumbnail_url,
            'background_url' => $request->background_url
        ]);

        $new_movie_id = Movie::latest()->first()->get('id');

        dd($new_movie_id);

        $genres_size = sizeof($request->genres);

        for($i = 0; $i < $genres_size; $i++){

            GenreMovie::create([
                'movie_id' => $new_movie_id,
                'genre_id' => $request->genres[$i]
            ]);

        }

        $actors_size = sizeof($request->actors);

        for($i = 0; $i < $actors_size; $i++){
            
            Character::create([
                'movie_id' => $new_movie_id,
                'actor_id' => $request->actors[$i],
                'character_id' => $request->characters[$i]
            ]);

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
