<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('welcome');
});

// Rota que aponta para um método de um controller
Route::get('/convidados', [GuestController::class, 'index'])->name('Convidados');
