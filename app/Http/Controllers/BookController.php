<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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
            $validatedData = $request->validate([
                'name' => 'required|min:3|max:255',
                'author_name' => 'required|min:3|max:255',
                'isbn' => 'required|min:10|max:17',
                'published_year' => 'required|integer|min:500|max:2099',
                'book_image' => 'nullable|image'
            ]);

            $book = new Book;
            $book->name = $validatedData['name'];
            $book->author_name = $validatedData['author_name'];
            $book->isbn = $validatedData['isbn'];
            $book->published_year = $validatedData['published_year'];
            $book->image_path = null;

            // If an image file was uploaded
            if ($request->hasFile("book_image")) {
                $image_path = $request->file("book_image")->store("bookImages", "public");
                $book->image_path = $image_path;
            }

            $book->save();

            return redirect()->route('books.view');
        }

        public function crud_update(Request $request, Book $book) {
            $request->validate([
                'name' => 'required|min:3|max:255',
                'author_name' => 'required|min:3|max:255',
                'isbn' => 'required|min:10|max:17',
                'published_year' => 'required|integer|min:500|max:2099',
                'book_image' => 'nullable|image'
            ]);

            $book->update($request->only(['title', 'author_name', 'isbn', 'published_year']));

            // If an image file was uploaded
            if ($request->hasFile("book_image")) {
                $image_path = $request->file("book_image")->store("bookImages", "public");
                $book->image_path = $image_path;
                $book->save();
            }


            return redirect()->route('books.view');
        }

        public function crud_delete(Request $request, Book $book) {
            $book->delete();

            return redirect()->route('books.view');
        }
}
