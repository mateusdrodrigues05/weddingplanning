<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\invite\InviteController;

Route::get('/', function () {
    return view('welcome');
});

// Rota que aponta para um método de um controller
Route::get('/guests', [GuestController::class, 'index'])->name('guests');
Route::get('/guest/show/{id}', [GuestController::class, 'show'])->name('guest.show');
Route::post('/guests', [GuestController::class, 'store'])->name('guests.store');
Route::delete('/guests/{id}', [GuestController::class, 'delete'])->name('guests.delete');





//Invite Routes
Route::get('/invite', [InviteController::class, 'index'])->name('invite');
