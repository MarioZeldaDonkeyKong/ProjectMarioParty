@extends('index')

@section('title', 'Create')

@section('content')

    <form method="POST" action="/payments/store">
        {{csrf_field()}}
        <div>
            <input type="text" name="payment_name" placeholder="Payment Title">
        </div>

        <div>
            <textarea name="description" placeholder="Payment Description"></textarea>
        </div>

        {{--<div>--}}
            {{--<input type="text" name="value" placeholder="Value">--}}
        {{--</div>--}}

        {{--<div>--}}
            {{--<input type="text" name="currency" placeholder="EUR">--}}
        {{--</div>--}}

        {{--<div>--}}
            {{--<input type="text" name="date" placeholder="date">--}}
        {{--</div>--}}

        {{--<div>--}}
            {{--<input type="text" name="note" placeholder="Notes">--}}
        {{--</div>--}}

        {{--<div>--}}
            {{--<input type="text" name="imageUrl" placeholder="image URL">--}}
        {{--</div>--}}

        <div>
            <button type="submit">Create Payment</button>
        </div>
    </form>

@endsection

