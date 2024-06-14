<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/deposit', function () {
    return view('deposit');
});