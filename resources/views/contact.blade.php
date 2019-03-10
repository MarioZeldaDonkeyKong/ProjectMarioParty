@extends('index')

@section('title', 'Contact')


@section('content')

    Contact Page

    @foreach ($users as $user)

        <li>{{ $user ->name }}</li>

    @endforeach

@endsection
