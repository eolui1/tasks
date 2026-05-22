<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Rota principal
Route::get('/', function () {
    return view('welcome');
});

// Rotas resource para Books (CRUD completo)
Route::resource('books', BookController::class);