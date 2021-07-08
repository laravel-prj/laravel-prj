
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    
    <style>
        #loadCheckOutGif {
            position: fixed;
            z-index: 9999;
            height: 100%;
            width: 100%;
        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Cart view section -->
    <div id="loadCheckOutGif" style="display: none">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            style=" background: rgb(241, 242, 243); display: block;" width="100%" height="100%" viewBox="0 0 100 100"
            preserveAspectRatio="xMidYMid">
            <g transform="rotate(0 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(30 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(60 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s"
                        repeatCount="indefinite">
                    </animate>
                </rect>
            </g>
            <g transform="rotate(90 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(120 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(150 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s"
                        repeatCount="indefinite">
                    </animate>
                </rect>
            </g>
            <g transform="rotate(180 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(210 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(240 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s"
                        repeatCount="indefinite">
                    </animate>
                </rect>
            </g>
            <g transform="rotate(270 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(300 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(330 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s"
                        repeatCount="indefinite"></animate>
                </rect>
            </g>
        </svg>
    </div>
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form method="post" action="/order">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">
                                            <!-- Billing Details -->
                                            <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#collapseThree">
                                                            Billing Details
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse show">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <strong>Name:
                                                                        <strong></strong><span><?php echo e($currentCustomer->first_name); ?>

                                                                            <?php echo e($currentCustomer->last_name); ?></span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill"><Strong>Gender:
                                                                        <?php if($currentCustomer->gender == 0): ?>
                                                                            <span>Female</span>
                                                                        <?php else: ?>
                                                                            <span>Male</span>
                                                                        <?php endif; ?>
                                                                    </Strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <strong><span>Email:
                                                                            <?php echo e($currentCustomer->email); ?></span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <strong><span>tel:
                                                                            <?php echo e($currentCustomer->tel); ?></span></strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <strong><span>address:
                                                                            <?php echo e($currentCustomer->address); ?></span></strong>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <strong><span>city:
                                                                            <?php echo e($currentCustomer->city); ?></span></strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkout-right">
                                        <h4>Order Summary</h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Size</th>
                                                        <th>Discount</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($item['name']); ?><strong> x
                                                                    <?php echo e($item['current_quantity']); ?></strong></td>
                                                            <td><?php echo e($item['size']); ?></td>
                                                            <td><strong><?php echo e($item['discout_item']); ?></strong></td>
                                                            <td><?php echo e($item['price'] * $item['current_quantity'] - $item['price'] * $item['current_quantity'] * ($item['discout_item'] / 100)); ?>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th colspan="3">Total Item</th>
                                                        <td><?php echo e($totalItem); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3">Total Money</th>
                                                        <td><?php echo e($totalMoney); ?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <h4>Confirm</h4>
                                        <div class="aa-payment-method">
                                            <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"
                                                border="0" alt="PayPal Acceptance Mark">
                                            <input type="submit" value="Order" onclick="onOrder()" class="aa-browse-btn">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    
    
    
    <script>
        function onOrder() {
            $('#loadCheckOutGif').attr('style', 'display:block');
        }
        $(function() {
            // your custom javascript
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/customer/pages/checkout.blade.php ENDPATH**/ ?>