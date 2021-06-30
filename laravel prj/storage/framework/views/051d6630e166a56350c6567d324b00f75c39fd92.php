<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Products section -->

    <section id="aa-catg-head-banner">
        <img src="<?php echo e(asset('customer/img/fashion/fashion-header-bg-8.jpg')); ?>" alt="fashion img">
        <div class="aa-catg-head-banner-area">
          <div class="container">
           <div class="aa-catg-head-banner-content">
             <h2>Cart Page</h2>
             <ol class="breadcrumb">
               <li><a href="index.html">Home</a></li>
               <li class="active">Cart</li>
             </ol>
           </div>
          </div>
        </div>
       </section>
       <!-- / catg header banner section -->

      <!-- Cart view section -->
      <section id="cart-view">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="cart-view-area">
                <div class="cart-view-table">
                  <form id="formCart">
                    <div class="table-responsive">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Remove</th>
                             <th>Image</th>
                             <th>Name</th>
                             <th>Size</th>
                             <th>Price</th>
                             <th>Quantity</th>
                             <th>Discount</th>
                             <th>Total</th>
                           </tr>
                         </thead>
                         <tbody id="tableBody">
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id = "tr<?php echo e($key); ?>">
                                    <td onclick="removeCart(<?php echo e($key); ?>)"><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                                    <td><a href="#"><img src="<?php echo e(asset('/customer/img/' . $item['image'])); ?>" alt="img"></a></td>
                                    <td><a class="aa-cart-title" href="#"><?php echo e($item['name']); ?></a></td>
                                    <td><?php echo e($item['size']); ?></td>
                                    <td>
                                        <?php echo e($item['price']); ?>$
                                    </td>
                                    <td>
                                        


                                        <input class="aa-cart-quantity" type="number" min="1" max="<?php echo e($item['max']); ?>"
                                        name="<?php echo e($key); ?>"
                                        onchange="return changeQuantity(<?php echo e($key); ?>, <?php echo e($item['price']); ?>, <?php echo e($item['discout_item']); ?>, this.value);" value="<?php echo e($item['current_quantity']); ?>">
                                    </td>
                                    <td><?php echo e($item['discout_item']); ?>%</td>
                                    <td class="subMoney" id="money<?php echo e($key); ?>"><?php echo e(($item['price'] * $item['current_quantity']) - (($item['price'] * $item['current_quantity']) * ($item['discout_item'] / 100))); ?>$</td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                           <tr>
                             <td colspan="8" class="aa-cart-view-bottom">
                               <input class="aa-cart-view-btn" type="button" value="Update Cart" onclick="updateCart();">
                             </td>
                           </tr>
                           </tbody>
                       </table>
                     </div>
                  </form>
                  <!-- Cart Total view -->
                  <div class="cart-view-total">
                    <h4>Cart Totals</h4>
                    <table class="aa-totals-table">
                      <tbody>
                        <tr>
                          <th>Total</th>
                          <td id="totalMoney"><?php echo e($totalMoney); ?>$</td>
                        </tr>
                      </tbody>
                    </table>
                    <a href="<?php echo e(asset('checkout')); ?>" class="aa-cart-view-btn">Proced to Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Cart view section -->



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<script>
    function changeQuantity(id, price, discoutItem, currentQuantity){
        subTotal = (price * currentQuantity) - ((price * currentQuantity) * (discoutItem/100));
        $("#money"+id).text(subTotal);

        let sum = 0;
        $('.subMoney').each(function(){
            sum += parseFloat($(this).text());
        });
        $('#totalMoney').text(sum);
    }

    $(function () {

    });
</script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Code\laravel prj_4\resources\views/customer/pages/cart.blade.php ENDPATH**/ ?>