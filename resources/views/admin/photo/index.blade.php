@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="col-md-8">
            <h1>Tabel Photo</h1>
            <a href="{{ route('photo.create') }}" class="btn btn-primary">Create New</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                @if($photos)
                    @foreach($photos as $photo)
                        <tr>
                            <td>{{ $photo->id }}</td>
                            <td>{{ $photo->name }}</td>
                            <td><img src="{{ asset($photo->path) }}" alt="" width="100px"></td>
                            <td>{{ $photo->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection