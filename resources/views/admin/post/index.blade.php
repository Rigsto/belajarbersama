@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="col-md-8">
            <h1>Tabel Post</h1>
            <a href="{{ route('post.create') }}" class="btn btn-primary">Create New</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @if($posts)
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->created_at->diffForHumans() }}</td>
                                <td><a href="{{ route('post.show', $post->id) }}" class="btn btn-success">More</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection