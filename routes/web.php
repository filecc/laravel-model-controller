<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/about', [MovieController::class, 'about'])->name('about');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie.show');
