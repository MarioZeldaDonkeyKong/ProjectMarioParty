<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Mollie\Wrappers\MollieApiWrapper;
use App\Payment;

class PaymentController extends Controller {

    public function index() {

        $payments = Payment::all();

        return view('/payment', compact('payments'));
    }

    public function Pay(){
        $amount = (string)$_POST['amount'];
        $currency = $_POST['currency'];
        $description = $_POST['description'];
        $mollie = new MollieApiWrapper();
        $payment = $mollie->payments()->create([
            "amount"=>[
                "currency"=>$currency,
                "value"=>$amount // 2 decimals
            ],
            "description"=>$description,
            "redirectUrl"=>"https://www.google.com",
            "webhookUrl"=>"https://nl.wikipedia.org/wiki/Hoofdpagina"
        ]);
    }

    public function PayRequest(){
        echo("Debug");
        return view("payRequest");
    }

    public function store() {

        $payment = new Payment();

        $payment->payment_name = request('payment_name');

        $payment->description = request('description');

        $payment->value = '10.00';

        $payment->currency = 'EUR';

        $payment->date = '2018-10-20';

        $payment->note = 'A note';

        $payment->imageUrl = 'www.google.nl';

        $payment->account_Number_id = '1';


        $payment->save();

        return redirect('payment');

        // return request ('description');
        // return request()->all();

    }
}
