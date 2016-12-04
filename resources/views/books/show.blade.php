
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
                        {!! Html::linkRoute('books.edit', 'Edit', array($book->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>

                    <div class="col-sm-6">
                        {!! Form::open(array('route' => array('books.destroy', $book->id), 'method' => 'DELETE')) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection