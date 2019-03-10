@extends('index')

@section('title', 'Home')

@section('content')

    <h1>This is a home page, {{ $foo }}</h1>

<ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>

@endsection
