<?php

use Illuminate\Support\Facades\Route;
// PENTING: Panggil controller yang baru dibuat di baris ini
use App\Http\Controllers\PageController;

// Route untuk halaman Home (index)
Route::get('/', [PageController::class, 'index']);

// Route untuk halaman About Us
Route::get('/aboutus', [PageController::class, 'about']);

// Route untuk halaman Contact
Route::get('/contact', [PageController::class, 'contact']);

// Route untuk halaman Menu
Route::get('/menu', [PageController::class, 'menu']);

// Route untuk halaman Halo
Route::get('/halo', [PageController::class, 'halo']);