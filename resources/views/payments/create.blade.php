@extends('layout.index')

@section('title', 'Create')

@section('content')

    <form method="POST" action="/payments/store">
        {{csrf_field()}}
        <div class="form-group">
            <input class="form-control" type="text" name="payment_name" placeholder="Payment Title" required>
            <input type="text" class="form-control" name="description" placeholder="Payment Description" required>
            <input class="form-control" type="text" name="value" placeholder="Value" required>
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
            <input class="form-control" type="date" name="date" min="<?php echo date("Y-m-d")?>" value="<?php echo date("Y-m-d")?>" required>
            <input class="form-control" type="text" name="note" placeholder="Notes" required>
            <input class="form-control" type="text" name="imageUrl" placeholder="https://images.ctfassets.net/k4kk06v59kf0/5WfNYahm6s4W2aqOsUsM0y/93db1c43d56b2a073dae1faa44410619/og-image-mollie.png">
            <button class="form-control" type="submit">Create Payment</button>
        </div>
    </form>
@endsection

