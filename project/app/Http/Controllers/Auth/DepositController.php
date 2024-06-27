<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deposit;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function deposit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $user = Auth::user();

        // Update saldo pengguna
        $user->balance += $request->input('amount');
        $user->save();


        return redirect()->back()->with('success', 'Deposit berhasil dilakukan.');
    }
}
