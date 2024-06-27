<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TransferController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TransactionController;

use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');


Route::get('/check-balance', [BalanceController::class, 'checkBalance'])->name('check-balance');
Route::get('/check-balance-page', function () {
    return view('check_balance');
})->name('check-balance-page');

Route::get('/transfer', function () {
    return view('transfer');
})->name('transfer-funds');
Route::post('/transfer/process', [TransferController::class, 'process'])->name('transfer.process');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/transaction-history', [TransactionController::class, 'index'])->name('transaction-history');
Route::get('/download-transaction-history', [TransactionController::class, 'download'])->name('download-transaction-history');
Route::post('/users/create', [UserController::class, 'create']);