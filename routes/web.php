<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/attendance-web', function () {
    return response()->json([
        ['name' => 'John Doe', 'date' => '2024-10-14'],
        ['name' => 'Jane Smith', 'date' => '2024-10-13']
    ]);
});
