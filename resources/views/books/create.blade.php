<!-- CREATE BOOK VIEW -->

@extends('main')

@section('title', '| Create new book')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create new book</h1>
            <hr>

            <!-- Form for the book creation -->
            {!! Form::open(['route' => 'books.store', 'data-parsley-validate' => '']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('isbn', 'ISBN:') }}
                {{ Form::text('isbn', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '13')) }}

                {{ Form::label('Description', 'Description:') }}
                {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('author', 'Author:') }}
                {{ Form::text('author', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::label('category', 'Category:') }}
                {{ Form::text('category', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::submit('Create book', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px')) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection