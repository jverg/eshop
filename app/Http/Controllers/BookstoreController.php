<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;

class BookstoreController extends Controller {

  // Show all books.
  public function getIndex() {

    $books = Book::paginate(3);

    return view('bookstore.index')->withBooks($books);
  }
}
