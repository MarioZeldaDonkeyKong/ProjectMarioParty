<?php echo $__env->make('index', array('title'=>'Pay'), \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@

<?php $__env->startSection('content'); ?>

<?php include 'partials/mollie.blade.php';
$payment = $mollie->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => "10.00"
    ],
    "description" => "My first API payment",
    "redirectUrl" => "https://webshop.example.org/order/12345/",
    "webhookUrl"  => "https://webshop.example.org/mollie-webhook/",
]);

?>
