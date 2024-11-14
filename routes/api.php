<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

// Rute untuk operasi CRUD (Food) dengan proteksi auth dan admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/foods', [FoodController::class, 'index']);  // Menampilkan daftar makanan
    Route::post('/foods', [FoodController::class, 'store']); // Menyimpan data makanan baru
    Route::delete('/foods/{food}', [FoodController::class, 'destroy']);  // Menghapus makanan
});
