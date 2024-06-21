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
        $balance = $user->balance->balance ?? 0;

        return response()->json([
            'status' => 'success',
            'balance' => $balance,
        ]);
    }
}
