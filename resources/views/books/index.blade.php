<!-- VIEW ALL BOOKS -->

@extends('main')

@section('title', '| Books')

@section('content')

    <!-- Title and button before boks table -->
    <div class="row">
        <div class="col-md-10">
            <h1>All Books</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('books.create') }}"
               class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new book
            </a>
        </div>

        <div class="col-md-12">
            <hr>

        </div>
    </div><!-- End of .row -->

    <!-- Books table -->
    <div class="row">
        <div class="col-md-12">

            <table class="table">
                <thead>
                    <th>#</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Created at</th>
                </thead>

                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <th>{{ $book->id }}</th>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ substr($book->description, 0, 30) }}{{ strlen($book->description) > 15 ? '...' : '' }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ date('M j, Y', strtotime($book->created_at)) }}</td>
                            <td>
                                <a href="{{ route('books.show', $book->id) }}", class="btn btn-default">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center">
                {!! $books->links() !!}
            </div>
        </div>
    </div>

@endsection