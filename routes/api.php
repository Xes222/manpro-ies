<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

// Rute untuk operasi CRUD (Food) dengan proteksi auth dan admin
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/foods', [FoodController::class, 'index']);  // Untuk GET (daftar makanan)
    Route::post('/foods', [FoodController::class, 'store'])->name('foods.store');  // Untuk POST (tambah makanan)
    Route::put('/foods/{food}', [FoodController::class, 'update'])->name('foods.update');  // Untuk PUT (edit makanan)
    Route::delete('/foods/{food}', [FoodController::class, 'destroy']);  // Untuk DELETE (hapus makanan)
});
