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
            'thumbnail_url' => 'img/thumbnails/matrix-resurrections.jpg',
            'background_url' => 'img/backgrounds/matrix-resurrections.jpg'
        ]);

        Movie::create([
            'title' => 'Black Adam',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2022',
            'thumbnail_url' => 'img/thumbnails/black-adam.jpg',
            'background_url' => 'img/backgrounds/black-adam.jpg'
        ]);

        Movie::create([
            'title' => 'A Quiet Place',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2018',
            'thumbnail_url' => 'img/thumbnails/a-quiet-place.jpg',
            'background_url' => 'img/backgrounds/a-quiet-place.jpg'
        ]);

        Movie::create([
            'title' => 'Venom',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2019',
            'thumbnail_url' => 'img/thumbnails/venom.jpg',
            'background_url' => 'img/backgrounds/venom.jpg'
        ]);

        Movie::create([
            'title' => 'The Banshees of Iniherin',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2019',
            'thumbnail_url' => 'img/thumbnails/the-banshees-of-iniherin.jpg',
            'background_url' => 'img/backgrounds/the-banshees-of-iniherin.jpg'
        ]);

        Movie::create([
            'title' => 'Lou',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2019',
            'thumbnail_url' => 'img/thumbnails/lou.jpg',
            'background_url' => 'img/backgrounds/lou.jpg'
        ]);

        Movie::create([
            'title' => 'Top Gun Maverick',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'director' => 'Bayu',
            'release_date' => '2019',
            'thumbnail_url' => 'img/thumbnails/top-gun-maverick.jpg',
            'background_url' => 'img/backgrounds/top-gun-maverick.jpg'
        ]);

        
    }
}
