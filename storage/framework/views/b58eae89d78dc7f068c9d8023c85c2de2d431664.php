<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('logout')); ?>">Logout</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login/Signup</a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <h1>This is a home page, <?php echo e($foo); ?></h1>

<ul>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($task); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>