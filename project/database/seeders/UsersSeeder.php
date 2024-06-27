<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            // 'name' => 'John Doe',
            // 'email' => 'john.doe@example.com',
            // 'password' => bcrypt('password'),
            // 'balance' => 1500.00,
        ]);
    }
}
