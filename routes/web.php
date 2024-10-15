<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'guest.home')->name('home');

Route::post('/register', RegisteredUserController::class)->name('register');

Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::prefix('user')->name('user.')->group(function () {
    Route::view('/', 'user.profile')->name('profile');
    Route::view('/wallet', 'user.wallet')->name('wallet');
    Route::view('/sections', 'user.sections')->name('sections');
});

Route::view('/subscriptions', 'guest.subscriptions')->name('subscriptions');
Route::view('/promos', 'guest.promos')->name('promos');
Route::view('/trainers', 'guest.trainers')->name('trainers');
Route::view('/news', 'guest.news')->name('news');
Route::view('/contacts', 'guest.contacts')->name('contacts');











Route::view('/colors', 'colors');
