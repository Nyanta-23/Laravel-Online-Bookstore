<?php

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



Route::get('/admin/books', function () {
    return view('admin.book.index');
});

Route::resource('/admin/books', BookController::class);