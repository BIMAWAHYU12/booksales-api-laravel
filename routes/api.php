<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

// Menggunakan apiResource untuk Genre dan Author
Route::apiResource('genres', GenreController::class);
Route::apiResource('authors', AuthorController::class);