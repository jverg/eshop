@extends('main')

@section('title', '| Bookstore')

@section('content')

    @foreach($books as $book)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>{{ $book->title }}</h2>
                <h4>{{ $book->author }}</h4>

                <p>{{ $book->description }}</p>

                <a href="{{ url('book/' . $book->slug) }}" class="btn btn-primary">Show more</a>
                <hr>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $books->links() !!}
            </div>
        </div>
    </div>
@endsection