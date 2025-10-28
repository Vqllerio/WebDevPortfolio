<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed a test user
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Make sure to hash passwords!
                'email_verified_at' => now(),
            ]
        );

        // ✅ Add this line so your projects get seeded
        $this->call([
            ProjectSeeder::class,
        ]);
    }
}
