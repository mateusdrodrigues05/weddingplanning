<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('welcome');
});

// Rota que aponta para um método de um controller
Route::get('/convidados', [GuestController::class, 'index'])->name('Convidados');
Route::post('/guests', [GuestController::class, 'store'])->name('guests.store');
Route::delete('/guests/{id}', [GuestController::class, 'delete'])->name('guests.delete');
