<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BalanceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/check-balance-view', function () {
    return view('check_balance');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/check-balance', [BalanceController::class, 'checkBalance']);
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');


Route::middleware(['auth'])->group(function () {
    Route::get('/transfer', [TransferController::class, 'showTransferForm'])->name('transfer.form');
    Route::post('/transfer', [TransferController::class, 'processTransfer'])->name('transfer.process');
    Route::get('/check-balance', [BalanceController::class, 'checkBalance'])->name('check.balance');
});
