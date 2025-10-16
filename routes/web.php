<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', [BookController::class, 'index']);
Route::get('/genres', [GenresController::class, 'index']);
Route::get('/authors', [ AuthorsController::class, 'index']);