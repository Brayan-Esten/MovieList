<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Genre::create([
            'type' => 'Comedy'
        ]);

        Genre::create([
            'type' => 'Crime'
        ]);

        Genre::create([
            'type' => 'Drama'
        ]);

        Genre::create([
            'type' => 'Family'
        ]);

        Genre::create([
            'type' => 'Fantasy'
        ]);

        Genre::create([
            'type' => 'History'
        ]);

        Genre::create([
            'type' => 'Action'
        ]);

        Genre::create([
            'type' => 'Sci-Fi'
        ]);

        Genre::create([
            'type' => 'Romance'
        ]);

        Genre::create([
            'type' => 'Thriller'
        ]);

        Genre::create([
            'type' => 'Horror'
        ]);

        Genre::create([
            'type' => 'Animation'
        ]);
    }
}
