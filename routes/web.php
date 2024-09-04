<?php

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
        'title' => 'Detail Book'
    ]);
});
