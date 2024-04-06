<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Main view
Route::get("/", [BookController::class, "view_index"])->name('books.view');

// Create GET and POST
Route::get("/book/create", [BookController::class, "view_create"])->name('books.create');
Route::post("/book/create", [BookController::class, "crud_create"])->name('books.create.crud');

// Update GET, POST and DELETE
Route::get('/book/{book}', [BookController::class, 'view_update'])->name('books.update');
Route::put('/book/{book}', [BookController::class, 'crud_update'])->name('books.update.crud');
Route::delete('/book/{book}', [BookController::class, 'crud_delete'])->name('books.delete.crud');
