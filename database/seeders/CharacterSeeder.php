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
            'movie_id' => 4,
            'actor_id' => 6,
            'name' => 'Eddie Brock, Venom'
        ]);

        Character::create([
            'movie_id' => 4,
            'actor_id' => 7,
            'name' => 'Anne weying'
        ]);

        Character::create([
            'movie_id' => 4,
            'actor_id' => 8,
            'name' => 'Carlton Drake, Riot'
        ]);

        Character::create([
            'movie_id' => 4,
            'actor_id' => 9,
            'name' => 'Carnage'
        ]);

    }
}
