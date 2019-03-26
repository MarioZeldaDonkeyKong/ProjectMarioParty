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
        $payment->value = '10.00';
        $payment->currency = 'EUR';
        $payment->date = '2018-10-20';
        $payment->note = 'A note';
        $payment->imageUrl = 'www.google.nl';
        $payment->account_Number_id = '1';

        $payment->save();

        return redirect('/');
    }

    public function payRequest(Payment $payment){
        $this->mollie->payments();
    }
}
