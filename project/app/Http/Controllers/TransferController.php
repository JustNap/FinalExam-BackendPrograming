<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    public function showTransferForm()
    {
        return view('transfer');
    }

    public function processTransfer(Request $request)
    {
        $request->validate([
            'to_account' => 'required|exists:users,email',
            'amount' => 'required|numeric|min:1',
        ]);

        $fromUser = Auth::user();
        $toUser = User::where('email', $request->to_account)->first();
        $amount = $request->amount;

        if ($fromUser->balance < $amount) {
            return back()->withErrors(['Insufficient balance.']);
        }

        DB::transaction(function () use ($fromUser, $toUser, $amount) {
            $fromUser->balance -= $amount;
            $fromUser->save();

            $toUser->balance += $amount;
            $toUser->save();

            Transaction::create([
                'from_user_id' => $fromUser->id,
                'to_user_id' => $toUser->id,
                'amount' => $amount,
            ]);
        });

        return redirect()->back()->with('success', 'Transfer successful!');
    }
}
