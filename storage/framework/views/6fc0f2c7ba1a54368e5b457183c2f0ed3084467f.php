<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo e(url('create_product')); ?>">Add a new product</a></li>
                    <li class="list-group-item"><a href="<?php echo e(url('create_product')); ?>"><?php echo app('translator')->getFromJson('messages.create_product'); ?></a></li>
                </ul>
                
                <div class="card-header"><?php echo app('translator')->getFromJson('messages.dashboard'); ?></div>
                <!--
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
                
                product->name ne vivodit-->    
                
                    
                
                
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <div class="card-body">
                   
                        <p class="card-text">
                            <span class="badge badge-primary"><?php echo app('translator')->getFromJson('messages.'.($product->product->name)); ?></span><!--  nestrada --> 
                            <span class="badge badge-primary"><?php echo e($product->product->name); ?></span>
                            <span class="badge badge-primary"><?php echo e($product->price); ?></span>
                            <span class="badge badge-primary"><?php echo e($product->country); ?></span>
                            <span class="badge badge-primary"><?php echo e($product->description); ?></span>
                        </p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myshop\resources\views/home.blade.php ENDPATH**/ ?>