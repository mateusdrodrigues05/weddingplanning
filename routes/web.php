<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\invite\InviteController;
use App\Http\Controllers\ProfileController;


// =====================================================
// PUBLIC ROUTES
// =====================================================

Route::get('/', function () {
    return view('welcome');
});


// Public invitation / RSVP
Route::get('/invite/{guest:rsvp_token}', [InviteController::class, 'show'])
    ->name('invite.show');

Route::post('/invite/{guest}', [InviteController::class, 'store'])
    ->name('invite.store');


// =====================================================
// AUTHENTICATED BACKOFFICE
// =====================================================

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // Guests
    Route::get('/guests', [GuestController::class, 'index'])
        ->name('guests');

    Route::get('/guest/show/{id}', [GuestController::class, 'show'])
        ->name('guest.show');

    Route::post('/guests', [GuestController::class, 'store'])
        ->name('guests.store');

    Route::delete('/guests/{id}', [GuestController::class, 'delete'])
        ->name('guests.delete');


    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


// =====================================================
// BREEZE AUTH ROUTES
// =====================================================

require __DIR__.'/auth.php';