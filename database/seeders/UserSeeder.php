<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'adminyopmail@example.com',
            'password' => bcrypt('password'), // Use Laravel's bcrypt for hashing
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Author User',
            'email' => 'author@example.com',
            'password' => bcrypt('password'),
            'role' => 'author',
        ]);

        User::create([
            'name' => 'Reviewer User',
            'email' => 'barathsenthil000@example.com',

            'password' => bcrypt('password'),
            'role' => 'reviewer',
        ]);
    }
}
