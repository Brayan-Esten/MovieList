<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $my_watchlist = Watchlist::with('movie')
                ->where('user_id', auth()->user()->id)
                ->get();

        if(request('filter_status') && request('filter_status') != 'all'){
            $my_watchlist = Watchlist::with('movie')
                ->where('user_id', auth()->user()->id)
                ->where('status', request('filter_status'))
                ->get();
        }
        
        return view('watchlists.index', compact('my_watchlist'));
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

        return redirect('/movies')->with('message', $request->movie_title . ' has been added to watchlist!');

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id){

        if($request->status != 'remove'){
            Watchlist::where('id', $id)
            ->update(['status' => $request->status]);

            return redirect('/watchlists')->with('message', 
                $request->movie_title . '\'s status has been changed to ' . $request->status
            );
        }

        Watchlist::destroy($id);

        return redirect('/watchlists')->with('message', 
            $request->movie_title . ' has been removed from watchlist'
        );

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
        
        return redirect('/movies')->with('message', $request->movie_title . ' has been removed from watchlist!');
    }
}
