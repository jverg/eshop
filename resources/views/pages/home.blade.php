
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
              <div class="book">
                  <h3>Book title</h3>
                  <p>Lorem ipsum</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
              <hr>
              <div class="book">
                  <h3>Book title</h3>
                  <p>Lorem ipsum</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
              <hr>
              <div class="book">
                  <h3>Book title</h3>
                  <p>Lorem ipsum</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
          </div>
          <div class="col-md-3 col-md-offset-1">
              <h2>Sidebar</h2>
          </div>
      </div>
@endsection
