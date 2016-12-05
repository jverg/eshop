@extends('main')

@section('title', "| $book->title" )

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $book->title }}</h1>

            <p>{{ $book->description }}</p>
        </div>
    </div>
@endsection