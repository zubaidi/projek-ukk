<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImagesController::class, 'index'])->name('dashboard');
Route::post('/upload', [ImagesController::class, 'upload'])->name('image.upload');
// Route::get('/kantin', function () {
//     return view('kantin');
// })->name('kantin');
