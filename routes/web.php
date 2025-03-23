<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::post('/add-to-cart/{book}', [BookController::class, 'addToCart'])->name('add-to-cart');
Route::get('/checkout', [BookController::class, 'checkout'])->name('checkout');
Route::delete('/remove-from-cart/{book}', [BookController::class, 'removeFromCart'])->name('remove-from-cart');