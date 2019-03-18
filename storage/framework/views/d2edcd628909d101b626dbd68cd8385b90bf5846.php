<!doctype html>

<html>

<head>

    <title><?php echo $__env->yieldContent('title', 'Laracasts'); ?></title>
    <?php echo $__env->yieldContent('helpers'); ?>

</head>

<body>

The real index

<?php echo $__env->yieldContent('content'); ?>


<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/contact">Contact</a> us to learn more.</li>
    <li><a href="/payments/payRequest">Pay Request</a></li>
    <li><a href="/payments/create">Create</a></li>
</ul>

</body>

</html>
