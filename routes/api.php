<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\GuestController;
use App\Http\Controllers\Api\LogsController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    //guests
    Route::apiResource('guests', GuestController::class)
        ->parameters(['guests' => 'guest:id'])
        ->names('api.guests');
    
    //logs
    Route::get('/logs', [LogsController::class, 'index']);
});
