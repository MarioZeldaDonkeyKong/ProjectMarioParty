<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Mollie\Wrappers\MollieApiWrapper;
use App\Payment;

class PaymentsController extends Controller {
    private $mollie;

    public function __construct()
    {
        $this->mollie = new MollieApiWrapper();
    }

    public function index() {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    public function create() {
        return view('payments.create');
    }

    public function storePayment() {

        $payment = new Payment();

        $payment->payment_name = request('payment_name');
        $payment->description = request('description');
        $payment->value = request('value');
        $payment->currency = request('currency');
        $payment->date = request('date');
        $payment->note = request('note');
        $payment->imageUrl = request('imageUrl');
        $payment->account_Number_id = '1';
        $payment->id=dechex(count(Payment::all()));

        $payment->save();
        $this->mollie->payments()->create([
            "amount" => [
                "currency"=>$payment->currency,
                "value"=>$payment->value
            ],
            "description" => $payment->description,
            "metadata" => [
                "order_id" => $payment->id
            ]
        ]);

        return redirect('/payments');
    }

    public function payRequest(Payment $payment){
        $this->mollie->payments();
    }
}
