<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Movie::create([
            'title' => 'The Matrix : Resurrections',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',

            'director' => 'Bayu',
            'release_date' => '2021',
            'thumbnail_url' => 'matrix-resurrections.jpg',
            'background_url' => 'matrix-resurrections.jpg'
        ]);

        Movie::create([
            'title' => 'Black Adam',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2022',
            'thumbnail_url' => 'black-adam.jpg',
            'background_url' => 'black-adam.jpg'
        ]);

        Movie::create([
            'title' => 'A Quiet Place',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2018',
            'thumbnail_url' => 'a-quiet-place.jpg',
            'background_url' => 'a-quiet-place.jpg'
        ]);

        Movie::create([
            'title' => 'Venom',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2019',
            'thumbnail_url' => 'venom.jpg',
            'background_url' => 'venom.jpg'
        ]);

        Movie::create([
            'title' => 'The Banshees of Iniherin',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2019',
            'thumbnail_url' => 'the-banshees-of-iniherin.jpg',
            'background_url' => 'the-banshees-of-iniherin.jpg'
        ]);

        Movie::create([
            'title' => 'Lou',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2019',
            'thumbnail_url' => 'lou.jpg',
            'background_url' => 'lou.jpg'
        ]);

        Movie::create([
            'title' => 'Top Gun Maverick',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2019',
            'thumbnail_url' => 'top-gun-maverick.jpg',
            'background_url' => 'top-gun-maverick.jpg'
        ]);

        
    }
}
