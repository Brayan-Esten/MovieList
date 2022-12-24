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
            'title' => 'A Quiet Place',

            'description' => 'In a post-apocalyptic world, a family is forced to live in silence while hiding from monsters with ultra-sensitive hearing.',

            'director' => 'John Krasinski',
            'release_date' => '2018-04-03',
            'thumbnail_url' => 'img/thumbnails/a-quiet-place.jpg',
            'background_url' => 'img/backgrounds/a-quiet-place.jpg'
        ]);

        Movie::create([
            'title' => 'The Matrix Resurrections',

            'description' => 'Return to a world of two realities: one, everyday life; the other, what lies behind it. To find out if his reality is a construct, to truly know himself, Mr. Anderson will have to choose to follow the white rabbit once more.',

            'director' => 'Lana Wachowski',
            'release_date' => '2021-12-22',
            'thumbnail_url' => 'img/thumbnails/the-matrix-resurrections.jpg',
            'background_url' => 'img/backgrounds/the-matrix-resurrections.jpg'
        ]);

        Movie::create([
            'title' => 'The Banshees of Inisherin',

            'description' => 'Two lifelong friends find themselves at an impasse when one abruptly ends their relationship, with alarming consequences for both of them.',

            'director' => 'Martin McDonagh',
            'release_date' => '2022-10-21',
            'thumbnail_url' => 'img/thumbnails/the-banshees-of-inisherin.jpg',
            'background_url' => 'img/backgrounds/the-banshees-of-inisherin.jpg'
        ]);

        Movie::create([
            'title' => 'Venom',

            'description' => 'A failed reporter is bonded to an alien entity, one of many symbiotes who have invaded Earth. But the being takes a liking to Earth and decides to protect it.',

            'director' => 'Ruben Fleischer',
            'release_date' => '2018-10-03',
            'thumbnail_url' => 'img/thumbnails/venom.jpg',
            'background_url' => 'img/backgrounds/venom.jpg'
        ]);

        Movie::create([
            'title' => 'Top Gun: Maverick',

            'description' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUN elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',

            'director' => 'Joseph Kosinski',
            'release_date' => '2022-05-27',
            'thumbnail_url' => 'img/thumbnails/top-gun-maverick.jpg',
            'background_url' => 'img/backgrounds/top-gun-maverick.jpg'
        ]);

        Movie::create([
            'title' => 'Black Adam',

            'description' => 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods-and imprisoned just as quickly-Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.',

            'director' => 'Jaume Collet-Serra',
            'release_date' => '2022-10-19',
            'thumbnail_url' => 'img/thumbnails/black-adam.jpg',
            'background_url' => 'img/backgrounds/black-adam.jpg'
        ]);

        Movie::create([
            'title' => 'Lou',

            'description' => 'A storm rages. A young girl is kidnapped. Her mother teams up with the mysterious woman next door to pursue the kidnapper, a journey that tests their limits and exposes shocking secrets from their pasts.',

            'director' => 'Anna Foerster',
            'release_date' => '2022-09-23',
            'thumbnail_url' => 'img/thumbnails/lou.jpg',
            'background_url' => 'img/backgrounds/lou.jpg'
        ]);

    }
}
