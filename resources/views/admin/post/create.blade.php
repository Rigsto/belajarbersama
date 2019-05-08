@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-md-6">
        {!! Form::open(['method'=>'POST', 'action'=>'PostController@store']) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('title', 'Title :') !!}
            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Title', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Description :') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
        </div>
{{--        <div class="form-group">--}}
{{--            {!! Form::label('sel', 'Select option') !!}--}}
{{--            {!! Form::select('sel', array('satu', 'dua', 'tiga')) !!}--}}
{{--            {!! Form::selectYear('year', 1990, 2100) !!}--}}
{{--            {!! Form::selectRange('range', 1, 31) !!}--}}
{{--            {!! Form::selectMonth('month') !!}--}}
{{--        </div>--}}
        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection