@extends('layout')

@section('content')
    <h1>Posts</h1>

    @foreach ($posts as $post)
        <h4>{{ $post->title }} - {{ $post->description }}</h4>
    @endforeach

@endsection
