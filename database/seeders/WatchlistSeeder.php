<?php

namespace Database\Seeders;

use App\Models\Watchlist;
use Illuminate\Database\Seeder;

class WatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Watchlist::create([
            'user_id' => 2,
            'movie_id' => 4,
        ]);

        Watchlist::create([
            'user_id' => 3,
            'movie_id' => 4,
        ]);

        Watchlist::create([
            'user_id' => 4,
            'movie_id' => 4,
        ]);

        Watchlist::create([
            'user_id' => 2,
            'movie_id' => 2,
        ]);

        Watchlist::create([
            'user_id' => 3,
            'movie_id' => 2,
        ]);

        Watchlist::create([
            'user_id' => 4,
            'movie_id' => 2,
        ]);

        Watchlist::create([
            'user_id' => 2,
            'movie_id' => 6,
        ]);

        Watchlist::create([
            'user_id' => 3,
            'movie_id' => 6,
        ]);

        Watchlist::create([
            'user_id' => 3,
            'movie_id' => 1,
        ]);

        Watchlist::create([
            'user_id' => 4,
            'movie_id' => 1,
        ]);

    }
}
