
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Fashion</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>         
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
   <!-- product category -->
   <section id="aa-product-category">
     <div class="container">
       <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
           <div class="aa-product-catg-content">
             <div class="aa-product-catg-body">
               <ul class="aa-product-catg">
                 <!-- start single product item -->
                 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="<?php echo e(asset("customer/img/$item->image")); ?>" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Detail</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#"><?php echo e($item->name); ?></a></h4>
                      <span class="aa-product-price"><?php echo e($item->price); ?></span>
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
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                     
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
             <div class="aa-product-catg-pagination">
               <nav>
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>
             </div>
           </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
           <aside class="aa-sidebar">
             <!-- single sidebar -->
             <div class="aa-sidebar-widget">
               <h3>Brands</h3>
              
               
               <ul class="aa-catg-nav">
                <?php $__currentLoopData = $navbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="#"><?php echo e($brand->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
               
             </div>
             <!-- single sidebar -->
             <div class="aa-sidebar-widget">
               <h3>Tags</h3>
               <div class="tag-cloud">
                 <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <a href="#"><?php echo e($typee->name); ?></a>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
             </div>
             <!-- single sidebar -->
             <div class="aa-sidebar-widget">
               <h3>Top Products</h3>
               <div class="aa-recently-views">
                 <ul>
                   <li>
                     <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                     <div class="aa-cartbox-info">
                       <h4><a href="#">Product Name</a></h4>
                       <p>1 x $250</p>
                     </div>                    
                   </li>
                   <li>
                     <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                     <div class="aa-cartbox-info">
                       <h4><a href="#">Product Name</a></h4>
                       <p>1 x $250</p>
                     </div>                    
                   </li>
                    <li>
                     <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                     <div class="aa-cartbox-info">
                       <h4><a href="#">Product Name</a></h4>
                       <p>1 x $250</p>
                     </div>                    
                   </li>                                      
                 </ul>
               </div>                            
             </div>
             <!-- single sidebar -->
             <div class="aa-sidebar-widget">
               <h3>Sale Products</h3>
               <div class="aa-recently-views">
                 <ul>
                   <li>
                     <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                     <div class="aa-cartbox-info">
                       <h4><a href="#">Product Name</a></h4>
                       <p>1 x $250</p>
                     </div>                    
                   </li>
                   <li>
                     <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                     <div class="aa-cartbox-info">
                       <h4><a href="#">Product Name</a></h4>
                       <p>1 x $250</p>
                     </div>                    
                   </li>
                    <li>
                     <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                     <div class="aa-cartbox-info">
                       <h4><a href="#">Product Name</a></h4>
                       <p>1 x $250</p>
                     </div>                    
                   </li>                                      
                 </ul>
               </div>                            
             </div>
           </aside>
         </div>
        
       </div>
     </div>
   </section>
   <!-- / product category -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<script>
   $(function () {
       // your custom javascript
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\linh\OneDrive\Máy tính\laravel prj\resources\views/customer/pages/lv.blade.php ENDPATH**/ ?>