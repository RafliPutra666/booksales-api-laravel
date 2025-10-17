<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
