
<?php

use Illuminate\Support\Facades\Route;

// Wildcard route untuk Vue.js
Route::get('/{any}', function () {
    return view('app');  // Pastikan ini adalah halaman utama Vue
})->where('any', '.*');  // Menangani semua rute untuk Vue.js
