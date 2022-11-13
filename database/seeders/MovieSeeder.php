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

            'genre' => 'Action',
            'director' => 'Bayu',
            'release_date' => '2021',
            'image_thumbnail' => 'matrix-resurrections.jpg',
            'background' => 'matrix-resurrections.jpg'
        ]);

        Movie::create([
            'title' => 'Black Adam',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'genre' => 'Superhero',
            'director' => 'Bayu',
            'release_date' => '2022',
            'image_thumbnail' => 'black-adam.jpg',
            'background' => 'black-adam.jpg'
        ]);

        Movie::create([
            'title' => 'A Quiet Place',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'genre' => 'Horror',
            'director' => 'Bayu',
            'release_date' => '2018',
            'image_thumbnail' => 'a-quiet-place.jpg',
            'background' => 'a-quiet-place.jpg'
        ]);

        Movie::create([
            'title' => 'Venom',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'genre' => 'Superhero',
            'director' => 'Bayu',
            'release_date' => '2019',
            'image_thumbnail' => 'venom.jpg',
            'background' => 'venom.jpg'
        ]);

        Movie::create([
            'title' => 'The Banshees of Iniherin',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'genre' => 'Horror',
            'director' => 'Bayu',
            'release_date' => '2019',
            'image_thumbnail' => 'the-banshees-of-iniherin.jpg',
            'background' => 'te-banshees-of-iniherin.jpg'
        ]);

        Movie::create([
            'title' => 'Lou',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'genre' => 'Drama',
            'director' => 'Bayu',
            'release_date' => '2019',
            'image_thumbnail' => 'lou.jpg',
            'background' => 'lou.jpg'
        ]);

        Movie::create([
            'title' => 'Top Gun Maverick',

            'description' => 
            '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, cupiditate vero quia corporis itaque perspiciatis?
            ',
            
            'genre' => 'Action',
            'director' => 'Bayu',
            'release_date' => '2019',
            'image_thumbnail' => 'top-gun-maverick.jpg',
            'background' => 'top-gun-maverick.jpg'
        ]);

        
    }
}
