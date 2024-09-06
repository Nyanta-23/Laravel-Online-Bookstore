<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('books', [
        'title' => 'All Books',
        'books' => Book::all()
    ]);
});

Route::get('/book/{book:slug}', function(Book $book) {

    return view('book', [
        'title' => 'Detail Book of ' . $book->name,
        'book' => $book

    ]);
});


// Todo buat dulu adminnya baru nanti dipikir kembali
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::resource('/admin/books', BookController::class);


// Sekaragn buat authentication nya setelah itu dipikirin lagi nanti

Route::get('/auth/signup', [AuthController::class, 'signup']);
Route::get('/auth/signin', [AuthController::class, 'signin']);
Route::post('/auth/signup', [AuthController::class, 'regist']);
Route::post('/auth/signin', [AuthController::class, 'auth']);

// Buat middleware untuk selanjutnaya sisanya dipikirin lagi
