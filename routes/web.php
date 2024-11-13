<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

// Rute untuk operasi CRUD (Food)
Route::get('/foods', [FoodController::class, 'index'])->name('foods.index');  // Menampilkan daftar makanan
Route::post('/foods', [FoodController::class, 'store'])->name('foods.store');  // Menyimpan data makanan baru
Route::delete('/foods/{food}', [FoodController::class, 'destroy']);  // Menghapus makanan


// Wildcard route untuk Vue.js
Route::get('/{any}', function () {
    return view('app');  // Pastikan ini adalah halaman utama Vue
})->where('any', '.*');  // Menangani semua rute untuk Vue.js



