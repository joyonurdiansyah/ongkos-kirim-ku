<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kurirController;
use App\Http\Controllers\SocialController;

Route::middleware(['web'])->group(function () {
    // Social login routes
    Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
    Route::get('/auth/google/callback', [SocialController::class, 'googleCallback'])->name('google.callback');

    // Home and other pages
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/home-page', function () {
        return view('pages.home', [
            'avatar' => Session::get('avatar'),
        ]);
    })->name('home.page');

    Route::get('/cek-ongkir', function () {
        return view('pages.cek-ongkir', [
            'avatar' => Session::get('avatar'),
        ]);
    })->name('cek.ongkir');

    // Kurir routes
    Route::get('/data-kota', [kurirController::class, 'GetCity'])->name('kurir.getcity');
    Route::post('/cektarif', [kurirController::class, 'cektarif'])->name('kurir.cektarif');
    Route::get('/form-request-pickup', [kurirController::class, 'requestPickup'])->name('kurir.requestPickup');
    Route::get('/pickup-data', [kurirController::class, 'getPickupData'])->name('kurir.getPickupData');
    Route::get('/pickup-data-pembeli/{id}', [kurirController::class, 'getdataPembeli'])->name('kurir.getdataPembeli');
    Route::post('/tambah-data-pembeli/{id}', [kurirController::class, 'tambahDataPembeli'])->name('kurir.tambahDataPembeli');
    Route::post('/add-seller-data', [kurirController::class, 'addDataSeller'])->name('kurir.addDataSeller');

    // Not found
    Route::get('/user-not-found', function () {
        return view('not-found.user-not-found');
    })->name('user.notfound');
});

// Authentication routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
