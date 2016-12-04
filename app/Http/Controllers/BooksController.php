<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use Session;

class BooksController extends Controller
{
    /**
     * Display a listing of the books.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

      // Variable to store all the books from the database.
      $books = Book::all();

      // Return the view.
      return view('books.index')->withBooks($books);
    }

    /**
     * Show the form for creating a new book.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Returns the view that creates a new book.
        return view('books.create');
    }

    /**
     * Store a newly created book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

      // Validate the data.
      $this->validate($request, array(
        'isbn' => 'required|max:13',
        'title' => 'required|max:255',
        'description' => 'required',
        'author' => 'required',
        'category' => 'required',
      ));

      // Store the book in the database.
      $book = new Book;
      $book->isbn = $request->isbn;
      $book->title = $request->title;
      $book->description = $request->description;
      $book->author = $request->author;
      $book->category = $request->category;
      $book->save();

      Session::flash('success', 'Your book saved successfully!');

      // Redirect to another page.
      return redirect()->route('books.show', $book->id);

    }

    /**
     * Display the specified book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

      $book = Book::find($id);

      return view('books.show')->withBook($book);
    }

    /**
     * Show the form for editing the specified book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

      // Find the post in the database.
      $book = Book::find($id);

      // Return the view.
      return view('books.edit')->withBook($book);

    }

    /**
     * Update the specified book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

      // Validate the data.
      $this->validate($request, array(
        'isbn' => 'required|max:13',
        'title' => 'required|max:255',
        'description' => 'required',
        'author' => 'required',
        'category' => 'required',
      ));

      // Save the book to database.
      $book = Book::find($id);
      $book->isbn = $request->input('isbn');
      $book->title = $request->input('title');
      $book->description = $request->input('description');
      $book->author = $request->input('author');
      $book->category = $request->input('category');
      $book->save();

      // Show a success message.
      Session::flash('success', 'This book successfully edited.');

      // Redirect to book page.
      return redirect()->route('books.show', $book->id);

    }

    /**
     * Remove the specified book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

      // Find the book to delete.
      $book = Book::find($id);

      // Delete the book.
      $book->delete();

      Session::flash('success', 'The book was deleted successfully');
      return redirect()->route('books.index');
    }
}
