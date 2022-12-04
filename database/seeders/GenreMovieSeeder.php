<?php

namespace Database\Seeders;

use App\Models\GenreMovie;
use Illuminate\Database\Seeder;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        GenreMovie::create([
            'movie_id' => 1,
            'genre_id' => 7
        ]);

        GenreMovie::create([
            'movie_id' => 1,
            'genre_id' => 8
        ]);

        GenreMovie::create([
            'movie_id' => 2,
            'genre_id' => 7
        ]);

        GenreMovie::create([
            'movie_id' => 3,
            'genre_id' => 10
        ]);

        GenreMovie::create([
            'movie_id' => 3,
            'genre_id' => 11
        ]);

        GenreMovie::create([
            'movie_id' => 4,
            'genre_id' => 7
        ]);

        GenreMovie::create([
            'movie_id' => 4,
            'genre_id' => 8
        ]);

        GenreMovie::create([
            'movie_id' => 5,
            'genre_id' => 2
        ]);

        GenreMovie::create([
            'movie_id' => 5,
            'genre_id' => 3
        ]);

        GenreMovie::create([
            'movie_id' => 6,
            'genre_id' => 3
        ]);

        GenreMovie::create([
            'movie_id' => 6,
            'genre_id' => 4
        ]);

        GenreMovie::create([
            'movie_id' => 7,
            'genre_id' => 6
        ]);

        GenreMovie::create([
            'movie_id' => 7,
            'genre_id' => 7
        ]);
    }
}
