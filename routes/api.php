<?php

use App\Http\Controllers\Api\LocationController;
use Illuminate\Support\Facades\Route;

Route::middleware(['api.key'])->group(function () {
    Route::get('/locations', [LocationController::class, 'index']);
});
