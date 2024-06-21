<?php
use App\Http\Controllers\BalanceController;

Route::middleware(['auth'])->group(function () {
    Route::get('/check-balance', [BalanceController::class, 'checkBalance']);
});
