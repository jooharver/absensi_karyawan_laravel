<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

Route::middleware(['check.auth'])->group(function () {
    Route::get('/attendance', [AttendanceController::class, 'index']);
});