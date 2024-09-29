<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kurirController;
use App\Http\Controllers\SocialController;

Route::middleware(['web'])->group(function () {
    Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
    Route::get('/auth/google/callback', [SocialController::class, 'googleCallback'])->name('google.callback');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home-page', function () {
        return view('pages.home', [
            'avatar' => Session::get('avatar'),
        ]);
    });

    Route::get('/cek-ongkir', function () {
        return view('pages.cek-ongkir', [
            'avatar' => Session::get('avatar'),
        ]);
    });

    // list kurir routes
    Route::get('/data-kota', [kurirController::class, 'GetCity']);

    Route::post('/cektarif', [kurirController::class, 'cektarif']);

    Route::get('/user-not-found', function () {
        return view('not-found.user-not-found');
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
