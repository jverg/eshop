<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;

class BookstoreController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  // Show all books.
  public function getIndex() {

    $books = Book::paginate(3);

    return view('bookstore.index')->withBooks($books);
  }

  // Show single book.
  public function getSingle($slug) {

    // Get book based on slug.
    $book = Book::where('slug', '=', $slug)->first();

    return view('bookstore.single')->withBook($book);
  }
}
