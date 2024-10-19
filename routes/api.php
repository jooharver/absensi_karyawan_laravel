<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/check-connection', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Laravel and Flutter are connected!'
    ]);
});
