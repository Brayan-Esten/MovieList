<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        User::create([
            'username' => 'bayy',
            'email' => 'bayy@gmail.com',
            'password' => Hash::make('root'),
            'dob' => '2002-03-12',
            'phone' => '08123456789',
            'date_joined' => date('Y-m-d', time()),
            'is_admin' => true
        ]);
    }
}
