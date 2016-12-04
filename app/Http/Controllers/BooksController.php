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
        'title' => 'required|max:255',
        'isbn' => 'required|max:13',
        'description' => 'required',
        'author' => 'required',
        'category' => 'required',
      ));

      // Store the book in the database.
      $book = new Book;
      $book->title = $request->title;
      $book->isbn = $request->isbn;
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
