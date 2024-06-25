<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function process(Request $request)
    {
        $request->validate([
            'to_account' => 'required|email',
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
