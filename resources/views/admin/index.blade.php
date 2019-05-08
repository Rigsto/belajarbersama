@extends('layouts.admin')
@section('content')
<h1>Ini Halaman Admin setelah diganti</h1>
<a href="{{ route('post.index') }}">Lihat Post</a>
<a href="{{ route('photo.index') }}">Lihat Photo</a>
@endsection