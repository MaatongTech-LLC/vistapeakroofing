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
        $this->call([
            ProjectSeeder::class,
            ServiceSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Admin Admin',
            'email' => 'test@example.com',
        ]);
    }
}
