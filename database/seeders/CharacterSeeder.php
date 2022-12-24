<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        Character::create([
            'movie_id' => 1,
            'actor_id' => 1,
            'name' => 'Evelyn Abbott'// Emily Blunt
        ]);

        Character::create([
            'movie_id' => 1,
            'actor_id' => 2,
            'name' => 'Lee Abbott'// John Krasinski
        ]);

        Character::create([
            'movie_id' => 1,
            'actor_id' => 3,
            'name' => 'Regan Abbott'// Millicent Simmonds
        ]);

        Character::create([
            'movie_id' => 2,
            'actor_id' => 4,
            'name' => 'Neo'// Keanu Reeves 
        ]);

        Character::create([
            'movie_id' => 2,
            'actor_id' => 5,
            'name' => 'Trinity'// Carrie-Anne Moss
        ]);

        Character::create([
            'movie_id' => 3,
            'actor_id' => 6,
            'name' => 'Pádraic Súilleabháin'// Colin Farrell
        ]);

        Character::create([
            'movie_id' => 3,
            'actor_id' => 7,
            'name' => 'Colm Doherty'// Brendan Gleeson
        ]);

        Character::create([
            'movie_id' => 4,
            'actor_id' => 8,
            'name' => 'Eddie Brock'// Tom Hardy
        ]);

        Character::create([
            'movie_id' => 4,
            'actor_id' => 9,
            'name' => 'Anne Weying'// Michelle Williams
        ]);

        Character::create([
            'movie_id' => 4,
            'actor_id' => 10,
            'name' => 'Carlton Drake'// Riz Ahmed
        ]);

        Character::create([
            'movie_id' => 4,
            'actor_id' => 11,
            'name' => 'Cletus Kasady'// Woody Harrelson
        ]);

        Character::create([
            'movie_id' => 5,
            'actor_id' => 12,
            'name' => 'Capt. Pete Maverick Mitchell'// Tom Cruise
        ]);

        Character::create([
            'movie_id' => 5,
            'actor_id' => 13,
            'name' => 'Penny Benjamin'// Jennifer Connelly
        ]);

        Character::create([
            'movie_id' => 5,
            'actor_id' => 14,
            'name' => 'Lt. Bradley (Rooster) Bradshaw'// Miles Teller
        ]);

        Character::create([
            'movie_id' => 6,
            'actor_id' => 15,
            'name' => 'Black Adam'//Dwayne Johnson
        ]);

        Character::create([
            'movie_id' => 6,
            'actor_id' => 16,
            'name' => 'Hawkman'//Aldis Hodge
        ]);

        Character::create([
            'movie_id' => 6,
            'actor_id' => 17,
            'name' => 'Dr. Fate'//Pierce Brosnan
        ]);

        Character::create([
            'movie_id' => 7,
            'actor_id' => 18,
            'name' => 'Lou'//Allison Janney
        ]);

        Character::create([
            'movie_id' => 7,
            'actor_id' => 19,
            'name' => 'Hannah'//Jurnee Smollett
        ]);

        Character::create([
            'movie_id' => 7,
            'actor_id' => 20,
            'name' => 'Philip'//Logan Marshall-Green
        ]);
    }
}
