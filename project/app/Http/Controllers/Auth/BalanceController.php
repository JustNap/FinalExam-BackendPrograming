<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
    public function checkBalance()
    {
        $user = Auth::user();
        
        // Mengambil saldo dari relasi Balance jika ada, atau defaultkan ke 0 jika tidak ada
        $balance = optional($user->balance)->balance ?? 0;

        return response()->json([
            'status' => 'success',
            'balance' => $balance,
        ]);
    }
}
