<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::post('/register', RegisteredUserController::class)->name('register');

Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::prefix('user')->name('user.')->group(function () {
    Route::view('/', 'profile')->name('profile');
    Route::view('/wallet', 'wallet')->name('wallet');
    Route::view('/sections', 'sections')->name('sections');
});

Route::view('/subscriptions', 'subscriptions')->name('subscriptions');
Route::view('/promos', 'promos')->name('promos');
Route::view('/trainers', 'trainers')->name('trainers');
Route::view('/news', 'news')->name('news');
Route::view('/contacts', 'contacts')->name('contacts');











Route::view('/colors', 'colors');
