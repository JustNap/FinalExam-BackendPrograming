<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Withdraw;
use App\Http\Controllers\Controller;

class WithdrawController extends Controller
{
    public function withdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $user = Auth::user();

        // Update saldo pengguna
        $user->balance -= $request->input('amount');
        $user->save();


        return redirect()->back()->with('success', 'withdraw berhasil dilakukan.');
    }
}
