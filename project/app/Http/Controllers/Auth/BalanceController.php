// BalanceController.php
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
    public function checkBalance()
    {
        $user = Auth::user();
        $balance = optional($user->balance)->balance ?? 0;

        return view('balance', compact('balance'));
    }
}
