
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
    .t-alert {
        position: fixed;
        margin: 0 auto;
        top: 50%;
        width: 50%;
        height: 70px;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 99999;
    }

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Products section -->
    <?php if(!empty($msg)): ?>
        <section id="alertMess" class="alert alert-success t-alert">
            <div> <span><i style="font-size: 24px;" class="fa fa-bell" aria-hidden="true"> <?php echo e($msg); ?></i></span>
            </div>
        </section>
    <?php endif; ?>
    <section id="aa-slider">
        <div class="aa-slider-area">
          <div id="sequence" class="seq">
            <div class="seq-screen">
              <ul class="seq-canvas">
                <!-- single slide item -->
                <li>
                  <div class="seq-model">
                    <img data-seq src="<?php echo e(asset('customer/img/sale.jpg')); ?>" style="height: 500px" />
                  </div>
                  <div class="seq-title">
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn"
                      >SHOP NOW</a
                    >
                  </div>
                </li>
                <!-- single slide item -->
                <li>
                  <div class="seq-model">
                    <img
                      data-seq
                      src="<?php echo e(asset('customer/img/slide2.jpg')); ?>" style="height: 500px"
                    />
                  </div>
                  <div class="seq-title">
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn"
                      >SHOP NOW</a
                    >
                  </div>
                </li>
                <!-- single slide item -->
                <li>
                  <div class="seq-model">
                    <img
                      data-seq
                      src="<?php echo e(asset('customer/img/slide3.jpg')); ?>" style="height: 500px"
                    />
                  </div>
                  <div class="seq-title">
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn"
                      >SHOP NOW</a
                    >
                  </div>
                </li>
              </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset
              class="seq-nav"
              aria-controls="sequence"
              aria-label="Slider buttons"
            >
              <a type="button" class="seq-prev" aria-label="Previous"
                ><span class="fa fa-angle-left"></span
              ></a>
              <a type="button" class="seq-next" aria-label="Next"
                ><span class="fa fa-angle-right"></span
              ></a>
            </fieldset>
          </div>
        </div>
      </section>
      <!-- / slider -->
      <!-- popular section -->
      <section id="aa-popular-category">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="aa-popular-category-area">
                  <!-- start prduct navigation -->
                  <ul class="nav nav-tabs aa-products-tab">
                    <li class="active">
                      <h3 style="background-color: rgba(236, 46, 56, 0.993)">Top products</h3>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men popular category -->
                    <div class="tab-pane fade in active" id="popular">
                      <ul class="aa-product-catg aa-popular-slider">
                        <!-- start single product item -->
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li>
                            <figure>

                                <a class="aa-product-img" href="<?php echo e(asset("detail/$item->id")); ?>">
                                    <?php if(isset($item->image)): ?>
                                        <img
                                        src="<?php echo e(asset("customer/img/$item->image")); ?>"
                                        alt="polo shirt img"/>
                                    <?php else: ?>
                                    <img
                                    src="<?php echo e(asset("customer/img/no_image.png")); ?>"
                                    alt="polo shirt img"/>
                                    <?php endif; ?>

                                </a>
                                <a class="aa-add-card-btn" data-product-id="<?php echo e($item->id); ?>" href="<?php echo e(asset("detail/$item->id")); ?>"><span class="fa fa-shopping-cart">
                                  </span>Details
                                </a>
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#"><?php echo e($item->name); ?></a>
                                </h4>
                                <span class="aa-product-price"><?php echo e($item->price); ?></span>
                                
                              </figcaption>
                            </figure>
                            <span class="aa-badge aa-sold-out" href="#"
                            >Hot</span
                          >
                        </li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        


                      </ul>
                      <a class="aa-browse-btn" href="#"
                        >Browse all Product
                        <span class="fa fa-long-arrow-right"></span
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="aa-popular-category">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="aa-popular-category-area">
                  <!-- start prduct navigation -->
                  <ul class="nav nav-tabs aa-products-tab">
                    <li class="active">
                      <h3 style="background-color: rgba(236, 46, 56, 0.993)">Sale products</h3>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men popular category -->
                    <div class="tab-pane fade in active" id="popular">
                      <ul class="aa-product-catg aa-popular-slider">
                        <!-- start single product item -->
                        <?php $__currentLoopData = $sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saleitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset("customer/img/$saleitem->image")); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="33"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#"><?php echo e($saleitem->name); ?></a>
                              </h4>
                              <span class="aa-product-price"><?php echo e(($saleitem['price'] - (($saleitem['price']* $saleitem['discout_item'])/100))); ?></span
                              ><span class="aa-product-price"
                                ><del><?php echo e($saleitem->price); ?></del></span
                              >
                            </figcaption>
                          </figure>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </ul>
                      <a class="aa-browse-btn" href="#"
                        >Browse all Product
                        <span class="fa fa-long-arrow-right"></span
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section id="aa-client-brand">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-client-brand-area">
                <ul class="aa-client-brand-slider">
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/brand/burberry.png')); ?>" width="100px" alt="java img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/brand/chanel.png')); ?>" width="100px" alt="jquery img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/brand/gucci.png')); ?>" width="100px" alt="html5 img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/brand/LV.png')); ?>" width="100px" alt="css3 img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/brand/yame.jpg')); ?>" width="100px" alt="joomla img"
                    /></a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Client Brand -->

      <!-- Subscribe section -->

      <!-- / Products section -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<script>

   $(function () {
    // alertMess
    setTimeout(() => {
        $('#alertMess').hide();
    }, 5000);
   });
</script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\clown\OneDrive\Máy tính\laravel-prj\laravel prj\resources\views/customer/pages/index.blade.php ENDPATH**/ ?>