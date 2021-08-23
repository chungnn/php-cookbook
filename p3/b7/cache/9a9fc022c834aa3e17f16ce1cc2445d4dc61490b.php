

<?php $__env->startSection('content'); ?>

<div class="container products">
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo e($product['image']); ?>" width="200" height="300">
                <div class="caption">
                    <h4><?php echo e($product['name']); ?></h4>
                    <p><?php echo e($product['short_desc']); ?></p>
                    <p><strong>Giá: </strong><?php echo e($product['price']); ?>đ</p>
                    <p class="btn-holder"><a href="#/25" class="btn btn-warning btn-block text-center" role="button">Thêm vào giỏ</a> </p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div><!-- End row -->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cookbook\p3\b7\views/home.blade.php ENDPATH**/ ?>