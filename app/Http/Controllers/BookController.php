<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with(['author', 'category'])->latest()->get();

        return view('admin.book.index', [
            'title' => 'Books',
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $authors = Author::all();
        $categories = Category::all();

        return view('admin.book.create', [
            'authors' => $authors,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'book_title' => 'required|max:255',
            'slug' => 'required|unique:books',
            'author_id' => 'required',
            'category_id' => 'required',
            'stock' => 'required|max:11',
            'price' => 'required|max:11',
            'image' => 'image|file|max:1024',
            'synopsis' => 'required'
        ]);

        if ($request->file('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('book-images'), $imageName);

            $validated['image'] = 'book-images/' . $imageName;
        }

        Book::create($validated);

        return redirect('/admin/books')->with('success', 'New Book has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {

        return view('admin.book.show', [
            'title' => $book->book_title,
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', [
            'book' => $book,
            'categories' => Category::all(),
            'authors' => Author::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'book_title' => 'required|max:255',
            'author_id' => 'required',
            'category_id' => 'required',
            'stock' => 'required|max:11',
            'price' => 'required|max:11',
            'image' => 'image|file|max:1024',
            'synopsis' => 'required'
        ];

        if ($request->slug != $book->slug) {
            $rules['slug'] = 'required|unique:books';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            $imagePath = public_path($book->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('book-images'), $imageName);

            $validatedData['image'] = 'book-images/' . $imageName;
        }

        Book::where('id', $book->id)->update($validatedData);

        return redirect('/admin/books')->with('success', 'Book has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // if($book->image != null) Storage::delete($book->image);
        if ($book->image != null) {

            $imagePath = public_path($book->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        };
        Book::destroy($book->id);

        return redirect('/admin/books')->with('success', 'Book has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Book::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
