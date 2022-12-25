<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_watchlist = Watchlist::with('movie')
                        ->where('user_id', auth()->user()->id);

        if(request('filter_status') && request('filter_status') != 'all'){
            $my_watchlist = $my_watchlist->where('status', request('filter_status'));
        }

        if(request('search_watchlist') && request('search_watchlist') != ''){
            $my_watchlist = $my_watchlist->whereHas('movie', function(Builder $query){
                $query->where('title', 'like', '%'. request('search_watchlist') . '%');
            });
        }
        
        return view('watchlists.index', ['my_watchlist' => $my_watchlist->paginate(4)]);
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
        Watchlist::create([
            'user_id' => auth()->user()->id,
            'movie_id' => $request->movie_id
        ]);

        return back()->with('message', $request->movie_title . ' has been added to watchlist!');

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
        if($request->status != 'remove'){
            Watchlist::where('id', $id)
            ->update(['status' => $request->status]);

            return back()->with('message', 
                $request->movie_title . '\'s status has been changed to ' . $request->status
            );
        }

        Watchlist::destroy($id);

        return back()->with('message', $request->movie_title . ' has been removed from watchlist');
    }
}
