@extends('layout')

@section('content')
    <h1>Add Post</h1>
    <form action="/post" method="post">

        <input type="text" name="text">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit">Add</button>
    </form>
@endsection
