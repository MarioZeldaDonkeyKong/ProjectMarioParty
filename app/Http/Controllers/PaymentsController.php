<?php

namespace App\Http\Controllers;

use App\AccountNumber;
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
        $payment->imageUrl = request('image');
        $payment->setCreatedAt(time());

        $payment_count = count(Payment::all());
        $payment_id = dechex($payment_count);
        $payment->id = $payment_id;

        $accountNumber = request('account_number');

        $this->storeInDataBase($payment, $accountNumber);
        $this->storeInMollie($payment, $accountNumber);

        return redirect('/payments');
    }

    private function storeInDataBase(Payment $payment, string $accountNumber){
        $payment->account_Number_id = AccountNumber::all()->where('account_number',$accountNumber)->pluck('id');
        $payment->save();
    }

    private function storeInMollie(Payment $payment, string $accountNumber){
        $this->mollie->payments()->create([
            "amount" => [
                "currency" => $payment->currency,
                "value" => $payment->value
            ],
            "description" => $payment->payment_name,
            "metadata" => [
                "order_id" =>  $payment->id
            ],
            "details" => $payment->notes
        ]);
    }

    public function payRequest(Payment $payment){
        $this->mollie->payments();
    }
}
