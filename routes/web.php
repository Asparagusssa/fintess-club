<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::post('register', RegisteredUserController::class)->name('register');
Route::post('login', [SessionController::class, 'store'])->name('login');





Route::view('colors', 'colors');
