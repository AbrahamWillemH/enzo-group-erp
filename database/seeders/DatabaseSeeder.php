<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'test123',
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => 'enZO12345!!',
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'admin2',
            'email' => 'admin1@gmail.com',
            'password' => 'enZO12345!!',
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'admin3',
            'email' => 'admin1@gmail.com',
            'password' => 'enZO12345!!',
            'role' => 'admin'
        ]);
    }
}
