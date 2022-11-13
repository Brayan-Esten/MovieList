<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username' => 'bayy',
            'email' => 'bayy@gmail.com',
            'password' => Hash::make('root'),
            'dob' => '2002-03-12',
            'phone' => '08123456789',
            'date_joined' => date('Y-m-d', time()),
            'is_admin' => true
        ]);

        User::create([
            'username' => 'bayu',
            'email' => 'bayu@gmail.com',
            'password' => Hash::make('root'),
            'dob' => '2002-03-12',
            'phone' => '08123456789',
            'date_joined' => date('Y-m-d', time()),
            'is_admin' => false
        ]);
    }
}
