<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Definisikan rute dashboard
Route::get('dashboard', function () {
    return view('dashboard'); // Gantilah ini dengan view dashboard yang sesuai
})->middleware('auth')->name('dashboard'); // Pastikan menambahkan 'name' untuk rute ini

Route::get('admins', [AdminController::class, 'index'])->name('admins.index');