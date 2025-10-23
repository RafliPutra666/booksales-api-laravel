<?php

use Illuminate\Http\Request;
use App\Http\Middleware\RoleAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\TransactionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Buku (endpoint publik)
Route::apiResource('/books', BookController::class);

Route::middleware(['auth:api'])->group(function () {
//Transaksi (endpoint user)
Route::apiResource('/transactions', TransactionController::class)->only(['update', 'store', 'show']);
//Genre (endpoint publik)
Route::apiResource('/genres', GenresController::class)->only(['index', 'show']);
//Author (endpoint publik)
Route::apiResource('/authors', AuthorsController::class)->only(['index', 'show']);

//Genre (endpoint admin)
Route::middleware(['role:admin'])->group(function () {
    Route::apiResource('/genres', GenresController::class)->only(['store', 'update', 'destroy']);
    Route::apiResource('/transactions', TransactionController::class)->only(['index', 'destroy']);
    Route::apiResource('/authors', AuthorsController::class)->only(['store', 'update', 'destroy']);
    });
});
//Login dan Register
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
