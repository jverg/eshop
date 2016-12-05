<?php

namespace App\Http\Controllers;

use App\Book;

class PagesController extends Controller {

  public function getAbout() {
    return view('pages.about');
  }
}
