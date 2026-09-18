<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\GuestController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('guests', GuestController::class)->parameters([
        'guests' => 'guest:id'
    ]);
});
