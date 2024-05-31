<?php
use App\Http\Controllers\BookController;

Route::post('/add-book', [BookController::class, 'addBook']);
Route::get('/book/{isbn}', [BookController::class, 'getBookByISBN']);
