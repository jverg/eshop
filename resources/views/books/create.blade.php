<!-- CREATE BOOK VIEW -->

@extends('main')

@section('title', '| Create new book')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create new book</h1>
            <hr>

            {!! Form::open(['route' => 'books.store']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}

                {{ Form::label('Description', 'Description:') }}
                {{ Form::textarea('description', null, array('class' => 'form-control')) }}

                {{ Form::submit('Create book', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection