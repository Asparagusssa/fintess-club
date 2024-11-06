<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::match(['GET', 'POST'],'/register', RegisteredUserController::class);
Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create');
    Route::post('/login', 'store')->name('login');
    Route::match(['GET', 'POST'], '/logout', 'destroy')->middleware('auth')->name('logout');
});

Route::prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::view('/', 'user.profile')->name('profile');
    Route::get('/wallet', [BalanceController::class, 'index'])->name('wallet');
    Route::post('/wallet', [BalanceController::class, 'deposit']);
    Route::view('/sections', 'user.sections')->name('sections');
    Route::view('/settings', 'user.settings')->name('settings');
    Route::post('/add-photo', [PhotoController::class, 'store'])->name('add-photo');
    Route::get('/reset-password', [PasswordController::class, 'showResetForm'])->name('show-reset-password');
    Route::post('/reset-password', [PasswordController::class, 'resetPassword'])->name('reset-password');
});

Route::view('/', 'guest.home')->name('home');
Route::view('/subscriptions', 'guest.subscriptions')->name('subscriptions');
Route::view('/promos', 'guest.promos')->name('promos');
Route::view('/trainers', 'guest.trainers')->name('trainers');
Route::view('/news', 'guest.news')->name('news');
Route::view('/contacts', 'guest.contacts')->name('contacts');











Route::view('/colors', 'colors');
