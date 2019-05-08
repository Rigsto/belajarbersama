@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="col-md-6">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
            {!! Form::model($post, ['method'=>'DELETE', 'action'=>['PostController@destroy', $post->id]]) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection