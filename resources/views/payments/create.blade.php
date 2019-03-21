@extends('layout.index')

@section('title', 'Create')

@section('helpers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#sandbox-container .input-group.date').datepicker({
        startDate: "today"
    });
</script>

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
            <div class="input-group date">
                <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
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
    <script type="text/javascript">
        $(".form_datetime").datetimepicker({
            format: "dd MM yyyy - hh:ii"
        });
    </script>
@endsection

