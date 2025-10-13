<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/genres', [GenresController::class, 'index']);
Route::get('/authors', [ AuthorsController::class, 'index']);