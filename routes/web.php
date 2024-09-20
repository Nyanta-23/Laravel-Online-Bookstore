<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

// Starter
Route::get('/', function () {
    return view('books', [
        'title' => 'All Books',
        'books' => Book::with(['author', 'category'])->latest()->get()
    ]);
});

// // Authentication
Route::get('/auth/signup', [AuthController::class, 'signup'])->middleware('guest');
Route::get('/auth/signin', [AuthController::class, 'signin'])->middleware('guest');
Route::post('/auth/signout', [AuthController::class, 'signout'])->middleware('auth');
Route::post('/auth/signup', [AuthController::class, 'regist']);
Route::post('/auth/signin', [AuthController::class, 'auth']);

// // App
Route::get('/book/{book:slug}', function (Book $book) {

    return view('book', [
        'title' => 'Detail Book of ' . $book->name,
        'book' => $book
    ]);
});


Route::get('/admin', function () {

    return view('admin.dashboard');
})->middleware('admin');

Route::get('/admin/books/checkSlug', [BookController::class, 'checkSlug'])->middleware('admin');
Route::resource('/admin/books', BookController::class)->middleware('admin');
Route::resource('/admin/orders', OrderController::class)->middleware('admin')->except(['edit']);

Route::get('/carts', [CartController::class, 'load']);
Route::post('/carts', [CartController::class, 'store']);
Route::delete('/carts/{cart:id}', [CartController::class, 'destroy']);
// Route::post('/carts', [Car]);

// Betulkan tampilan order untuk menampilkan order items agar bisa mendapatkan buku yang dibeli, jumlah yang dibeli, berapa banyak buku yang dibeli, dan jumlah keseluruhan harganya dari jumlah buku yang dibeli

// Menambahkan adding dan delete untuk carts pikirkan itu