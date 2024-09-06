<?php

use App\Http\Controllers\RainfallController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RainfallController::class, 'index']);
Route::post('/', [RainfallController::class, 'generateExcel']);