<?php
/**
 * Created by PhpStorm.
 * User: phi_p
 * Date: 27-2-2019
 * Time: 13:41
 */

namespace App\Http\Controllers;


class MollieController extends Controller
{
    public function doPayment(){
        echo "Dit is de functie";
    }

    public function Mollie() {
        $payment = $mollie->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "10.00"
            ],
            "description" => "My first API payment",
            "redirectUrl" => "https://webshop.example.org/order/12345/",
            "webhookUrl"  => "https://webshop.example.org/mollie-webhook/",
        ]);
    }

    public function getMollie()
    {
$apikey = 'test_tTE9wubecprs3n3hk3zcjebtP3n2Es';

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey($apikey);
return $mollie;
    }
}
