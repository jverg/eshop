
<!-- BOOK VIEW -->

@extends('main')

@section('title', '| View book')

@section('content')

    <!-- Main content -->
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $book->title }}</h1>

            <p class="lead">
                {{ $book->description }}
            </p>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <label>Url:</label>
                    <p><a href="{{ url('book/' . $book->slug) }}">{{ url($book->slug) }}</a></p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Created at:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($book->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Last updated:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($book->updated_at)) }}</p>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('books.edit', 'Edit', array($book->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>

                    <div class="col-sm-6">
                        {!! Form::open(array('route' => array('books.destroy', $book->id), 'method' => 'DELETE')) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('books.index','<< See all books', array(), array('class'=> 'btn btn-default btn-block btn-h1-spacing')) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection