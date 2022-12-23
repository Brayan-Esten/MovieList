<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            MovieSeeder::class,
            GenreSeeder::class,
            GenreMovieSeeder::class,
            ActorSeeder::class,
            CharacterSeeder::class,
            WatchlistSeeder::class
        ]);
    }
}
