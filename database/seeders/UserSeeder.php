<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Admin
        User::create([
            'username' => 'admin',
            'name' => 'muhammad admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        // User
        User::create([
            'username' => 'user',
            'name' => 'muhammad user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user')
        ]);
    }
}
