@extends('index')

@section('title', 'Home')

@section('content')

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="{{ route('login') }}">Login/Signup</a>
            @endauth
        </div>
    @endif

    <h1>This is a home page, {{ $foo }}</h1>

<ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>

@endsection
