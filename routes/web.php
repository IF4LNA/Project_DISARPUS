<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PustakawanController;

// Rute login dan logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute umum (tanpa autentikasi)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/bantuan', [HomeController::class, 'bantuan'])->name('bantuan');

// Rute dengan autentikasi dan peran
Route::middleware('auth')->group(function () {
    // Dashboard admin
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Dashboard pustakawan
    Route::middleware('role:pustakawan')->group(function () {
        Route::get('/pustakawan/dashboard', [PustakawanController::class, 'index'])->name('pustakawan.dashboard');
    });
});


