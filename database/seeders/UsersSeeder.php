<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
            'name' => 'Mohamad Haikal Dwiki Akbar',
            'email' => 'haikalofficial13@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'name' => 'Muhammad Hilman Dhanish Abdurahman',
            'email' => 'danisofficial11@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ]
    ])->each(function ($user) {
        DB::table('users')->insert($user);
        

    });
    }
}
