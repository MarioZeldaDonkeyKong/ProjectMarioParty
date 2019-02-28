<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Mollie\Wrappers\MollieApiWrapper;

class PaymentController extends Controller {
    public function Pay(){
        $amount = (string)$_POST['amount'];
        $currency = $_POST['currency'];
        $description = $_POST['description'];
        $mollie = new MollieApiWrapper();
        $payment = $mollie->payments()->create([
            "amount"=>[
                "currency"=>$currency,
                "value"=>$amount
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
}