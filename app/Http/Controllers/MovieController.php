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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
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
        // init
        $movies = Movie::with('genres');
        $genres = Genre::all();

        $heroes = $movies->get()->random(3);
        $populars = Movie::withCount('watchlists')
                            ->orderBy('watchlists_count', 'desc')
                            ->get();


        // specific request
        if(request('search_movie') && request('search_movie') != ''){
            $movies = $movies->where('title', 'like', '%'. request('search_movie') .'%');
        }

        if(request('genre')){
            $movies = $movies->whereHas('genres', function(Builder $query){
                $query->where('type', 'like', '%'. request('genre') .'%');
            });
        }

        if(request('sort') == 'latest'){
            $movies = $movies->orderBy('release_date', 'desc');
        }

        if(request('sort') == 'ascending'){
            $movies = $movies->orderBy('title', 'asc');
        }

        if(request('sort') == 'descending'){
            $movies = $movies->orderBy('title', 'desc');
        }



        // finally
        $movies = $movies->get();


        // if user role
        if(!auth()->user()->is_admin){

            $watchlist = collect();
            $temp =  Watchlist::select('movie_id')
                                ->where('user_id', auth()->user()->id)
                                ->get();

            foreach($temp as $t){
                $watchlist->push($t->movie_id);
            } 

            return view('movies.index', compact('movies', 'watchlist', 'heroes', 'populars', 'genres'));
        }

        return view('movies.index', compact('movies', 'heroes', 'populars', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        foreach($request->genres as $g){
            GenreMovie::create([
                'movie_id' => $latest_movie->id,
                'genre_id' => $g
            ]);
        }

        //

        $size = sizeof($request->characters);
        for($i = 0; $i < $size; $i++){
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
        $temp = GenreMovie::select('genre_id')
                    ->where('movie_id', $movie->id)
                    ->get();

        foreach($temp as $t) $genre_movie->push($t->genre_id);
        
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
            Storage::delete($request->old_thumbnail_url);
        }
        else{
            $validated['thumbnail_url'] = $request->old_thumbnail_url;
        }

        //

        if($request->file('background_url')){
            $validated['background_url'] = $request->file('background_url')->store('img/backgrounds');
            Storage::delete($request->old_background_url);
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

        foreach($request->genres as $g){
            GenreMovie::create([
                'movie_id' => $id,
                'genre_id' => $g
            ]);
        }

        // 

        Character::where('movie_id', $id)->delete();

        $size = sizeof($request->characters);

        for($i = 0; $i < $size; $i++){
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
        Movie::destroy($movie->id);
        
        if($movie->thumbnail_url){
            Storage::delete($movie->thumbnail_url);
        }
        
        if($movie->background_url){
            Storage::delete($movie->background_url);
        }

        return redirect('/movies')->with('message', ucwords($movie->title) . ' has been removed!');
    }
}
