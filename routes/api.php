<?php

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//     return response()->json(['message' => 'Hello API!']);
// });

Route::apiResource('clients', ClientController::class);

// Route::get('clients', [ClientController::class, 'index']);