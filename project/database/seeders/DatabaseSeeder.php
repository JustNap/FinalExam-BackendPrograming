<?php

namespace Database\Seeders;

use App\Models\Balance;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            // AccountSeeder::class,
            // JobsSeeder::class,
            // FailedJobsTableSeeder::class,
            // PasswordResetsTableSeeder::class,
            // PersonalAccessTokensTableSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
