<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Balance;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user::where('email', 'Andi@gmail.com')->first();
        
        if($user){
            $balance = Balance::create([
                // 'user_id' => $user->id,
                // 'balance' => 1000.000,
            ]);
        }
    }
}
