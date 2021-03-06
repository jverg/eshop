
<!-- HOME PAGE -->

@extends('main')

@section('title', '| Home page')

@section('content')
      <div class="row">
          <div class="col-md-12">
              <div class="jumbotron">
                  <h1>Το Βιβλιο</h1>
                  <p>Ενα φανταστικο βιβλίο με απίστευτη τροπη.</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Add to cart</a></p>
              </div>
          </div>
      </div><!-- End of header row -->

      <div class="row">
          <div class="col-md-8">

              @foreach($books as $book)
                  <div class="book">
                      <h3>{{ $book->title }}</h3>
                      <p>{{ substr($book->description, 0, 300) }}{{ strlen($book->description > 300 ? '...' : '') }}</p>
                      <a href="{{ url('book/' . $book->slug) }}" class="btn btn-primary">Show more</a>
                  </div>
                  <hr>
              @endforeach

          </div>
          <div class="col-md-3 col-md-offset-1">
              <h2>Sidebar</h2>
          </div>
      </div>
@endsection
