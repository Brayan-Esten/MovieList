<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Watchlist::create([
            'user_id' => auth()->user()->id,
            'movie_id' => $request->movie_id
        ]);

        return redirect('/movies')->with('add_to_watchlist_success', $request->movie_title . ' has been added to watchlist!');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        Watchlist::where('user_id', auth()->user()->id)
                    ->where('movie_id', $id)
                    ->delete();
        
        return redirect('/movies')->with('remove_from_watchlist_success', $request->movie_title . ' has been removed from watchlist!');
    }
}
