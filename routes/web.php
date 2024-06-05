<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

Route::middleware(['web'])->group(function () {
    Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
    Route::get('/auth/google/callback', [SocialController::class, 'googleCallback'])->name('google.callback');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home-page', function () {
        return view('pages.home');
    });

    Route::get('/user-not-found', function () {
        return view('not-found.user-not-found');
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
