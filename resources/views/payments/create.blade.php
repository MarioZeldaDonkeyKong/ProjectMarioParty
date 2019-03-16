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

        <div>
            <input type="text" name="value" placeholder="Value">
        </div>

        <div>
            <select class="form-control" name="currency" placeholder="EUR">
                <option>EUR</option>
                <option>AUD</option>
                <option>BGN</option>
                <option>BRL</option>
                <option>CAD</option>
                <option>CHF</option>
                <option>CZK</option>
                <option>DKK</option>
                <option>GBP</option>
                <option>HKD</option>
                <option>HRK</option>
                <option>HUF</option>
                <option>ILS</option>
                <option>ISK</option>
                <option>JPY</option>
                <option>MXN</option>
                <option>MYR</option>
                <option>NOK</option>
                <option>NZD</option>
                <option>PHP</option>
                <option>PLN</option>
                <option>RON</option>
                <option>RUB</option>
                <option>SEK</option>
                <option>SGK</option>
                <option>THB</option>
                <option>TWD</option>
                <option>USD</option>
            </select>
        </div>

        <div>
            <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>

        <div>
            <input type="text" name="note" placeholder="Notes">
        </div>

        <div>
            <input type="text" name="imageUrl" placeholder="https://images.ctfassets.net/k4kk06v59kf0/5WfNYahm6s4W2aqOsUsM0y/93db1c43d56b2a073dae1faa44410619/og-image-mollie.png">
        </div>

        <div>
            <button type="submit">Create Payment</button>
        </div>
    </form>
    <script>
        $('#sandbox-container .input-group.date').datepicker({
            startDate: "today",
            todayHighlight: true
        });
    </script>

@endsection

