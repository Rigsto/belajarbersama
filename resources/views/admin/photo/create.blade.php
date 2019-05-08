@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="col-md-6">
            {!! Form::open(['method'=>'POST', 'action'=>'PhotoController@store', 'files'=>true]) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('title', 'Title :') !!}
                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Title', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('path', 'Photo :') !!}
                {!! Form::file('path') !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <form action="" enctype="multipart/form-data"></form> //ini yang b
@endsection