<?php

use App\Http\Controllers\Api\BookController as ApiBookController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [ApiBookController::class, 'index']);
Route::post('/books', [ApiBookController::class, 'store']);
Route::get('/books/{id}', [ApiBookController::class, 'show']);
Route::put('/books/{id}', [ApiBookController::class, 'update']);
Route::delete('/books/{id}', [ApiBookController::class, 'destroy']);
