<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;

class TransactionController extends Controller
{

    public function showDepositForm()
    {
        return view('deposit');
    }

    public function processDeposit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        Auth::user()->balance += $request->balance;
        Auth::user()->save();

        return redirect()->route('homepage')->with('success', 'Setoran berhasil dilakukan.');
    }

    public function showWithdrawForm()
    {
        return view('withdraw');
    }


    public function processWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        if (Auth::user()->balance >= $request->amount) {
            Auth::user()->balance -= $request->amount;
            Auth::user()->save();

            return redirect()->route('homepage')->with('success', 'Tarikan berhasil dilakukan.');
        } else {
            return redirect()->back()->with('error', 'Saldo tidak mencukupi untuk melakukan tarikan.');
        }
    }
}

