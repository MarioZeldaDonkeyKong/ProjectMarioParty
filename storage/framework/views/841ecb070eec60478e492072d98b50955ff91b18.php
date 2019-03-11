<?php $__env->startSection('title', 'Pay Request'); ?>

<?php $__env->startSection('content'); ?>

<form method="post" action="/pay">
    <?php echo csrf_field(); ?>
    Currency:<br>
    <input type="text" name="currency">
    <br>
    <br>
    Amount:<br>
    <input type="text" name="amount">
    <br>
    <br>
    Description:<br>
    <input type="text" name="description">
    <br>
    <br>
    <input type="submit" value="Submit">
    Test
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>