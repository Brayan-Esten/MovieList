<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Actor;
use App\Models\Character;
use App\Models\GenreMovie;
use App\Models\Watchlist;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Storage;

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

        $temp = null;
        $watchlist = collect();

        if(auth()->user()){
            $temp =  Watchlist::select('movie_id')
                                ->where('user_id', auth()->user()->id)
                                ->get();

            foreach($temp as $t){
                $watchlist->push($t->movie_id);
            }
            
        } 

        $genres = Genre::all();

        $carousels = $movies->random(3);

        $populars = $movies->sortByDesc('release_date');

        if(auth()->user()){
            return view('movies.index', compact('movies', 'watchlist', 'carousels', 'populars', 'genres'));
        }

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

        Movie::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'director' => $validated['director'],
            'release_date' => $validated['release_date'],
            'thumbnail_url' => $validated['thumbnail_url'],
            'background_url' => $validated['background_url']
        ]);

        $latest_movie = Movie::latest()->first();

        //

        $genres_size = sizeof($request->genres);

        for($i = 0; $i < $genres_size; $i++){

            GenreMovie::create([
                'movie_id' => $latest_movie->id,
                'genre_id' => $validated['genres'][$i]
            ]);

        }

        //

        $actors_size = sizeof($request->actors);

        for($i = 0; $i < $actors_size; $i++){
            
            Character::create([
                'movie_id' => $latest_movie->id,
                'actor_id' => $validated['actors'][$i],
                'name' => $validated['characters'][$i]
            ]);

        }

        return redirect('/movies')->with('message', 'New movie added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        $casts = Character::with('actor')
                    ->where('movie_id', $movie->id)->get();

        $movies = Movie::all();

        $temp = null;
        $watchlist = collect();

        if(auth()->user()){
            $temp =  Watchlist::select('movie_id')
                                ->where('user_id', '=', auth()->user()->id)
                                ->get();

            foreach($temp as $t){
                $watchlist->push($t->movie_id);
            }  
        }

        if(auth()->user()){
            return view('movies.show', compact('movie', 'casts', 'movies', 'watchlist'));
        }

        return view('movies.show', compact('movie', 'casts', 'movies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
        $genres = Genre::all();
        $actors = Actor::all();

        //
        $genre_movie = collect();
        $temp1 = GenreMovie::select('genre_id')
                    ->where('movie_id', $movie->id)
                    ->get();

        foreach($temp1 as $t1) $genre_movie->push($t1->genre_id);
        
        //
        $characters = Character::where('movie_id', $movie->id)->get();

        return view('movies.edit', compact('movie', 'genres', 'actors', 'genre_movie', 'characters'));
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
            'thumbnail_url' => ['required_if:old_thumbnail_url,null', 'image'],
            'background_url' => ['required_if:old_background_url,null', 'image']
        ]);


        if($request->file('thumbnail_url')){
            $validated['thumbnail_url'] = $request->file('thumbnail_url')->store('img/thumbnails');
        }
        else{
            $validated['thumbnail_url'] = $request->old_thumbnail_url;
        }

        //

        if($request->file('background_url')){
            $validated['background_url'] = $request->file('background_url')->store('img/backgrounds');
        }
        else{
            $validated['background_url'] = $request->old_background_url;
        }

        Movie::where('id', $id)
        ->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'director' => $validated['director'],
            'release_date' => $validated['release_date'],
            'thumbnail_url' => $validated['thumbnail_url'],
            'background_url' => $validated['background_url']
        ]);

        //

        GenreMovie::where('movie_id', $id)->delete();

        $genres_size = sizeof($request->genres);

        for($i = 0; $i < $genres_size; $i++){

            GenreMovie::create([
                'movie_id' => $id,
                'genre_id' => $validated['genres'][$i]
            ]);

        }

        // 

        Character::where('movie_id', $id)->delete();

        $actors_size = sizeof($request->actors);

        for($i = 0; $i < $actors_size; $i++){
            
            Character::create([
                'movie_id' => $id,
                'actor_id' => $validated['actors'][$i],
                'name' => $validated['characters'][$i]
            ]);

        }

        return redirect('/movies')->with('message', ucwords($request->title) . ' has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //

        // dd($movie->title);
        Movie::destroy($movie->id);
        
        if($movie->thumbnail_url){
            Storage::delete($movie->thumbnail_url);
        }
        
        if($movie->background_url){
            Storage::delete($movie->bakground_url);
        }

        return redirect('/movies')->with('message', ucwords($movie->title) . ' has been removed!');
    }
}
