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
        // 1 admin only
        User::create([
            'username' => 'bayy',
            'email' => 'bayy@gmail.com',
            'password' => Hash::make('root'),
            'dob' => '2002-03-12',
            'phone' => '08123456789',
            'date_joined' => date('Y-m-d', time()),
            'is_admin' => true
        ]);


        // user 1
        User::create([
            'username' => 'bayu',
            'email' => 'bayu@gmail.com',
            'password' => Hash::make('root'),
            'dob' => '2002-01-01',
            'phone' => '08123456789',
            'date_joined' => date('Y-m-d', time()),
            'is_admin' => false
        ]);


        // user 2
        User::create([
            'username' => 'calvin',
            'email' => 'calvin@gmail.com',
            'password' => Hash::make('root'),
            'dob' => '2002-01-01',
            'phone' => '08123456789',
            'date_joined' => date('Y-m-d', time()),
            'is_admin' => false
        ]);


        // user 3
        User::create([
            'username' => 'jason',
            'email' => 'jason@gmail.com',
            'password' => Hash::make('root'),
            'dob' => '2002-01-01',
            'phone' => '08123456789',
            'date_joined' => date('Y-m-d', time()),
            'is_admin' => false
        ]);

    }
}
