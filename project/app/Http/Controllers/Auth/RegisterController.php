<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $randomDigits = str_pad(random_int(0, 99999), 6, '0', STR_PAD_LEFT);  
        $bankAccountNumber = '202' . $randomDigits;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'account_number' => $bankAccountNumber,
        ]);

        Auth::login($user);

        return redirect()->route('homepage')->with('success', 'Registration successful. Your bank account number is: ' . $bankAccountNumber);
    }
}

