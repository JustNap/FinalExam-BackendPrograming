<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/tentang', function () {
    return view('tentang');
});


Route::get('/check-balance', [BalanceController::class, 'checkBalance'])->name('check-balance');
Route::get('/check-balance-page', function () {
    return view('check_balance');
})->name('check-balance-page');

Route::middleware(['auth'])->group(function () {
    Route::get('/transfer', [TransferController::class, 'showTransferForm'])->name('transfer.form');
    Route::post('/transfer', [TransferController::class, 'processTransfer'])->name('transfer.process');
    Route::get('/check-balance', [BalanceController::class, 'checkBalance'])->name('check.balance');
});

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('homepage', function () {
    return view('homepage');
})->name('homepage');