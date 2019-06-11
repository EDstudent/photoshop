<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new product</div>
                <div class="card-body">
                    <?php echo Form::open(['action' => 'CreateProductController@store', 'files' => false, 'class' => 'form-horizontal']); ?>

                    <!--    auth save ??  -->
                    <div class="form-group row">
                    <?php echo Form::label('product', 'Product name', ['class' => 'col-md-4 control-label text-md-right']); ?>

                    <div class="col-md-6">
                    <?php echo Form::text('product', '', ['class' => 'form-control'.($errors->has('product') ? ' is-invalid' : '' )]); ?>

                     <?php if($errors->has('product')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('product')); ?></strong>
                        </span>
                    <?php endif; ?>     
                    </div></div>                  
                    <?php echo Form::submit('submit data', ['class' => 'btn btn-primary']); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\myshop\resources\views/create_product.blade.php ENDPATH**/ ?>