<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\User::all();
        foreach ($users as $user) {
            Account::create([
                'user_id' => $user->id,
                'balance' => 1000.00 // Saldo awal misalnya 1000.00
            ]);
        }
    }
}
