<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/film', [MovieController::class, 'index'])->name('movies.index');
Route::get('/film/{movie}', [MovieController::class, 'show'])->name('movies.show');
