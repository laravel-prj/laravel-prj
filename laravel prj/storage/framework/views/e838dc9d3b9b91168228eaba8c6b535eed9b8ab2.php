<div>
    <h2><?php echo e($data['type']); ?></h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Discount</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data['listCart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index); ?></td>
                        <?php if($item['image']): ?>
                            <td>
                                <img src="<?php echo e(asset('/customer/img/' . $item['image'])); ?>" alt="img">
                            </td>
                        <?php else: ?>
                            <td>
                                <img src="<?php echo e(asset('/customer/img/no_image.png')); ?>" alt="img">
                            </td>
                        <?php endif; ?>
                        <td><?php echo e($item['name']); ?></td>
                        <td><?php echo e($item['size']); ?></td>
                        <td><?php echo e($item['price']); ?>$</td>
                        <td><?php echo e($item['current_quantity']); ?></td>
                        <td><?php echo e($item['discout_item']); ?>%</td>
                        <td>
                            <?php echo e($item['price'] * $item['current_quantity'] - $item['price'] * $item['current_quantity'] * ($item['discout_item'] / 100)); ?>$
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
</div>
<?php /**PATH E:\laravel prj\resources\views/mails/mail-notify.blade.php ENDPATH**/ ?>