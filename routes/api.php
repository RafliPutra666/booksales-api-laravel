<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\RoleAdmin;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Buku (endpoint publik)
Route::get('/books', [BookController::class, 'index']);

Route::middleware(['auth:api'])->group(function () {
//Genre (endpoint publik)
Route::apiResource('/genres', GenresController::class)->only(['index', 'show']);
//Author (endpoint publik)
Route::apiResource('/authors', AuthorsController::class)->only(['index', 'show']);

//Genre (endpoint admin)
    Route::middleware(['role:admin'])->group(function () {
        Route::apiResource('/genres', GenresController::class)->only(['store', 'update', 'destroy']);
    
        Route::apiResource('/authors', AuthorsController::class)->only(['store', 'update', 'destroy']);
    });
});
//Login dan Register
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
