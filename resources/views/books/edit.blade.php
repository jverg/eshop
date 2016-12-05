
<!-- EDIT BOOK VIEW -->

@extends('main')

@section('title', '| Edit book')

@section('content')

    <!-- Main content -->
    <div class="row">

        <!-- Form to edit a book -->
        {!! Form::model($book, array('route' => array('books.update', $book->id), 'method' => 'PATCH')) !!}

        <div class="col-md-8">

            {{ Form::label('isbn', 'ISBN:') }}
            {{ Form::text('isbn', null, array('class' => 'form-control')) }}

            {{ Form::label('title', 'Title:', array('class' => 'form-spacing-top')) }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}

            {{ Form::label('slug', 'Slug:', array('class' => 'form-spacing-top')) }}
            {{ Form::text('slug', null, array('class' => 'form-control')) }}

            {{ Form::label('description', 'Description:', array('class' => 'form-spacing-top')) }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}

            {{ Form::label('author', 'Author:', array('class' => 'form-spacing-top')) }}
            {{ Form::text('author', null, array('class' => 'form-control')) }}

            {{ Form::label('category', 'Category:', array('class' => 'form-spacing-top')) }}
            {{ Form::text('category', null, array('class' => 'form-control')) }}
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($book->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last updated:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($book->updated_at)) }}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {{ Form::submit('Save changes', array('class' => 'btn btn-success btn-block')) }}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('books.show', 'Cancel', array($book->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection