<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
  .image{
    width: 45px;
    height: 50px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

   <!-- product category -->
   <section id="aa-product-details">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="aa-product-details-area">
             <div class="aa-product-details-content">
               <div class="row">
                 <!-- Modal view slider -->
                 <div class="col-md-5 col-sm-5 col-xs-12">
                   <div class="aa-product-view-slider">
                     <div id="demo-1" class="simpleLens-gallery-container">
                       <div class="simpleLens-container">
                         <div class="simpleLens-big-image-container">
                          <a data-lens-image="<?php echo e(asset("customer/img/$item->image")); ?>" class="simpleLens-lens-image"><img src="<?php echo e(asset("customer/img/$item->image")); ?>" class="simpleLens-big-image"></a></div>
                       </div>
                       <div class="simpleLens-thumbnails-container">
                         <?php $__currentLoopData = $listImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <a data-big-image="<?php echo e(asset("customer/img/$image")); ?>" data-lens-image="<?php echo e(asset("customer/img/$image")); ?>" class="simpleLens-thumbnail-wrapper" href="#">
                          <img src="<?php echo e(asset("customer/img/$image")); ?>" class="image">
                        </a>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- Modal view content -->
                 <div class="col-md-7 col-sm-7 col-xs-12">
                   <div class="aa-product-view-content">
                     <h3><?php echo e($item->name); ?></h3>
                     <div class="aa-price-block">
                       <span class="aa-product-view-price"><?php echo e($item->price); ?></span>
                       <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                     </div>
                     <form id="formItemDetail">
                     <div class="aa-prod-quantity">
                        <h4>Size</h4>
                        <?php $__currentLoopData = $listSize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="custom-control custom-radio custom-control-inline">
                         <input type="radio" class="custom-control-input" <?php if($loop->index == 0): ?> checked <?php endif; ?> name="size" value="<?php echo e($size->id); ?>" onchange="sizechange(<?php echo e($size->id); ?>)">
                         <label class="custom-control-label" for="defaultInline1"><?php echo e($size->size); ?></label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <input type="number" min="1" max="<?php echo e($max); ?>" name="current_quantity" id="current_quantity" value="1">
                        <input type="hidden" id="itemPrice" name="price" value="<?php echo e($item->price); ?>">
                        <input type="hidden" id="itemName" name="name" value="<?php echo e($item->name); ?>">
                        <input type="hidden" id="itemDiscount" name="discount" value="<?php echo e($item->discout_item); ?>">
                        <input type="hidden" id="itemImage" name="discount" value="<?php echo e($item->image); ?>">

                       <p class="aa-prod-category">
                         Category: <a href="#">name</a>
                       </p>
                     </div>
                     <div class="aa-prod-view-bottom">
                       <a class="aa-add-to-cart-btn" onclick="addToCart()">Add To Cart</a>
                       <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
                     </div>
                    </form>

                   </div>
                 </div>
               </div>
             </div>
             <div class="aa-product-details-bottom">
               <ul class="nav nav-tabs" id="myTab2">
                 <li><a href="#description" data-toggle="tab">Description</a></li>
               </ul>

               <!-- Tab panes -->
               <div class="tab-content">
                 <div class="tab-pane fade in active" id="description">
                   <p><?php echo e($item->description); ?></p>
                 </div>
               </div>
             </div>
             <!-- Related product -->
             <div class="aa-product-related-item">
               <h3>Related Products</h3>
               <ul class="aa-product-catg aa-related-item-slider">
                 <!-- start single product item -->
                 <li>
                   <figure>
                     <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                       <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                       <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                     </figcaption>
                   </figure>
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                   </div>
                   <!-- product badge -->
                   <span class="aa-badge aa-sale" href="#">SALE!</span>
                 </li>
                  <!-- start single product item -->
                 <li>
                   <figure>
                     <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                     <figcaption>
                       <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                       <span class="aa-product-price">$45.50</span>
                     </figcaption>
                   </figure>
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                   </div>
                   <!-- product badge -->
                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                 </li>
                 <!-- start single product item -->
                 <li>
                   <figure>
                     <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                   </figure>
                   <figcaption>
                     <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                     <span class="aa-product-price">$45.50</span>
                   </figcaption>
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                   </div>
                   <!-- product badge -->
                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                 </li>
                 <!-- start single product item -->
                 <li>
                   <figure>
                     <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                       <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                       <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                     </figcaption>
                   </figure>
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                   </div>
                 </li>
                 <!-- start single product item -->
                 <li>
                   <figure>
                     <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                     <figcaption>
                       <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                       <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                     </figcaption>
                   </figure>
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                   </div>
                 </li>
                 <!-- start single product item -->
                 <li>
                   <figure>
                     <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                     <figcaption>
                       <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                       <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                     </figcaption>
                   </figure>
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                   </div>
                   <!-- product badge -->
                   <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                 </li>
                 <!-- start single product item -->
                 <li>
                   <figure>
                     <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                       <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                       <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                     </figcaption>
                   </figure>
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                   </div>
                   <!-- product badge -->
                   <span class="aa-badge aa-hot" href="#">HOT!</span>
                 </li>
                 <!-- start single product item -->
                 <li>
                   <figure>
                     <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                       <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                       <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                     </figcaption>
                   </figure>
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                   </div>
                   <!-- product badge -->
                   <span class="aa-badge aa-sale" href="#">SALE!</span>
                 </li>
               </ul>
               <!-- quick view modal -->
               <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-body">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       <div class="row">
                         <!-- Modal view slider -->
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="aa-product-view-slider">
                             <div class="simpleLens-gallery-container" id="demo-1">
                               <div class="simpleLens-container">
                                   <div class="simpleLens-big-image-container">
                                       <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                           <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                       </a>
                                   </div>
                               </div>
                               <div class="simpleLens-thumbnails-container">
                                   <a href="#" class="simpleLens-thumbnail-wrapper"
                                      data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                      data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                       <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                   </a>
                                   <a href="#" class="simpleLens-thumbnail-wrapper"
                                      data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                      data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                       <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                   </a>

                                   <a href="#" class="simpleLens-thumbnail-wrapper"
                                      data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                      data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                       <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                   </a>
                               </div>
                             </div>
                           </div>
                         </div>
                         <!-- Modal view content -->
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="aa-product-view-content">
                             <h3>T-Shirt</h3>
                             <div class="aa-price-block">
                               <span class="aa-product-view-price">$34.99</span>
                               <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                             <h4>Size</h4>
                             <div class="aa-prod-view-size">
                               <a href="#">S</a>
                               <a href="#">M</a>
                               <a href="#">L</a>
                               <a href="#">XL</a>
                             </div>
                             <div class="aa-prod-quantity">
                               <form action="">
                                 <select name="" id="">
                                   <option value="0" selected="1">1</option>
                                   <option value="1">2</option>
                                   <option value="2">3</option>
                                   <option value="3">4</option>
                                   <option value="4">5</option>
                                   <option value="5">6</option>
                                 </select>
                               </form>
                               <p class="aa-prod-category">
                                 Category: <a href="#">Polo T-Shirt</a>
                               </p>
                             </div>
                             <div class="aa-prod-view-bottom">
                               <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                               <a href="#" class="aa-add-to-cart-btn">View Details</a>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
               </div>
               <!-- / quick view modal -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- / product category -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<script>
    const url = window.location.origin;
    function sizechange(id){
    $('#current_quantity').val(1);
      $.ajax({
          type: "GET",
          url: url+"/api/ajaxGetSizeById/",
          data: {
            id:id
          },
          success: function (response) {
            $('#current_quantity').attr('max', response);
          }
      });
  }

  function addToCart() {
    let id = $('#formItemDetail input[name="size"]:checked').val();
    // let itemName = $('#itemName').val();
    // let itemImage = $('#itemImage').val();
    // let itemPrice = $('#itemPrice').val();
    // let itemDiscount = $('#itemDiscount').val();
    // let currentQuantity = $('#current_quantity').val();
    console.log(currentQuantity);
    $.ajax({
        type: "POST",
        url: url+"/api/ajaxAddToCart/",
        data: {
            id: id,
            // itemName: itemName,
            // itemImage: itemImage,
            // itemPrice: itemPrice,
            // itemDiscount: itemDiscount,
            // currentQuantity: currentQuantity,
        },
        success: function (response) {

        }
    });
  }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\lảlinh\laravel prj\resources\views/customer/pages/detail.blade.php ENDPATH**/ ?>