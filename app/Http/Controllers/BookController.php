<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller {
    // Load views
        public function view_index() {
            $books = Book::all();
            return view('home', compact('books'));
        }

        public function view_create() {
            return view("create");
        }

        public function view_update(Book $book) {
            return view('update', compact('book'));
        }

    // CRUD
        public function crud_create(Request $request) {
            $book = new Book;
            $book->name = $request->name;
            $book->author_name = $request->author_name;
            $book->isbn = $request->isbn;
            $book->published_year = $request->published_year;
            $book->save();

            return redirect()->route('books.view');
        }

        public function crud_update(Request $request, Book $book) {
            $book->update($request->only(['title', 'author_name', 'isbn', 'published_year']));

            return redirect()->route('books.view');
        }

        public function crud_delete(Request $request, Book $book) {
            $book->delete();

            return redirect()->route('books.view');
        }
}
