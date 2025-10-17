<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/books', [BookController::class, 'index']);
//genres
Route::get('/genres', [GenresController::class, 'index']);
Route::post('/genres', [GenresController::class, 'store']);

//authors
Route::get('/authors', [ AuthorsController::class, 'index']);
Route::post('/authors', [AuthorsController::class, 'store']);