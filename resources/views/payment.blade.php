@extends('index')

@section('title', 'Payment')


@section('content')

Payment Page

    <h2>Payment Name:</h2>
    @foreach($payments as $payment)
        <li>{{$payment->payment_name}}</li>
    @endforeach

    <h2>Description:</h2>
    @foreach($payments as $payment)
        <li>{{$payment->description}}</li>
    @endforeach

@endsection

