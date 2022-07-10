<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;


class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => "Collin Powell",
                'email' => "admin@gmail.com",
                'user_type' => "admin",
                'email_verified_at' => now(),
               
                'password' => Hash::make('password123'), // password
                'remember_token' => Str::random(10),
                'created_at' => now()
           
            ]
        ]);

        \App\Models\User::factory(3)->create();
    }
}
