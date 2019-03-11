<?php $__env->startSection('title', 'Create'); ?>


<?php $__env->startSection('content'); ?>

    <form method="POST" action="/payment">
        <?php echo e(csrf_field()); ?>

        <div>
            <input type="text" name="payment_name" placeholder="Payment Title">
        </div>

        <div>
            <textarea name="description" placeholder="Payment Description"></textarea>
        </div>

        
            
        

        
            
        

        
            
        

        
            
        

        
            
        

        <div>
            <button type="submit">Create Payment</button>
        </div>
    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>