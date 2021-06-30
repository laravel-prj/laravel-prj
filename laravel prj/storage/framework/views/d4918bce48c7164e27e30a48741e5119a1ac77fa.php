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
                                <img data-seq src="<?php echo e(asset('customer/img/slider/1.jpg')); ?>" alt="Men slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Men Collection</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?php echo e(asset('customer/img/slider/2.jpg')); ?>" alt="Wristwatch slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 40% Off</span>
                                <h2 data-seq>Wristwatch Collection</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?php echo e(asset('customer/img/slider/3.jpg')); ?>"
                                    alt="Women Jeans slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Jeans Collection</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?php echo e(asset('customer/img/slider/4.jpg')); ?>" alt="Shoes slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Exclusive Shoes</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?php echo e(asset('customer/img/slider/5.jpg')); ?>"
                                    alt="Male Female slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 50% Off</span>
                                <h2 data-seq>Best Collection</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row">
                            <!-- promo left -->
                            <div class="col-md-5 no-padding">
                                <div class="aa-promo-left">
                                    <div class="aa-promo-banner">
                                        <img src="<?php echo e(asset('customer/img/promo-banner-1.jpg')); ?>" alt="img" />
                                        <div class="aa-prom-content">
                                            <span>75% Off</span>
                                            <h4><a href="#">For Women</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- promo right -->
                            <div class="col-md-7 no-padding">
                                <div class="aa-promo-right">
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="<?php echo e(asset('customer/img/promo-banner-3.jpg')); ?>" alt="img" />
                                            <div class="aa-prom-content">
                                                <span>Exclusive Item</span>
                                                <h4><a href="#">For Men</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="<?php echo e(asset('customer/img/promo-banner-2.jpg')); ?>" alt="img" />
                                            <div class="aa-prom-content">
                                                <span>Sale Off</span>
                                                <h4><a href="#">On Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="<?php echo e(asset('customer/img/promo-banner-4.jpg')); ?>" alt="img" />
                                            <div class="aa-prom-content">
                                                <span>New Arrivals</span>
                                                <h4><a href="#">For Kids</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="<?php echo e(asset('customer/img/promo-banner-5.jpg')); ?>" alt="img" />
                                            <div class="aa-prom-content">
                                                <span>25% Off</span>
                                                <h4><a href="#">For Bags</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
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
                                                            <img src="<?php echo e(asset("customer/img/$item->image")); ?>"
                                                                alt="polo shirt img" />
                                                        <?php else: ?>
                                                            <img src="<?php echo e(asset('customer/img/no_image.png')); ?>"
                                                                alt="polo shirt img" />
                                                        <?php endif; ?>

                                                    </a>
                                                    <a class="aa-add-card-btn" data-product-id="<?php echo e($item->id); ?>"
                                                        href="<?php echo e(asset("detail/$item->id")); ?>"><span
                                                            class="fa fa-shopping-cart">
                                                        </span>Details
                                                    </a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title">
                                                            <a href="#"><?php echo e($item->name); ?></a>
                                                        </h4>
                                                        <span class="aa-product-price"><?php echo e($item->price); ?></span>
                                                        
                                                    </figcaption>
                                                </figure>
                                                <span class="aa-badge aa-sold-out" href="#">Hot</span>
                                            </li>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        


                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product
                                        <span class="fa fa-long-arrow-right"></span></a>
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
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="<?php echo e(asset('customer/img/man/polo-shirt-2.png')); ?>"
                                                        alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" data-product-id="33" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="<?php echo e(asset('customer/img/women/girl-2.png')); ?>"
                                                        alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" data-product-id="34" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="<?php echo e(asset('customer/img/man/t-shirt-1.png')); ?>"
                                                        alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" data-product-id="35" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title">
                                                    <a href="#">T-Shirt</a>
                                                </h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="<?php echo e(asset('customer/img/women/girl-3.png')); ?>"
                                                        alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" data-product-id="36" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="<?php echo e(asset('customer/img/man/polo-shirt-1.png')); ?>"
                                                        alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" data-product-id="37" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="<?php echo e(asset('customer/img/women/girl-4.png')); ?>"
                                                        alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" data-product-id="38" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="<?php echo e(asset('customer/img/man/polo-shirt-4.png')); ?>"
                                                        alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" data-product-id="39" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="<?php echo e(asset('customer/img/women/girl-1.png')); ?>"
                                                        alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" data-product-id="40" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">This is Title</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product
                                        <span class="fa fa-long-arrow-right"></span></a>
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
                                <a href="#"><img src="<?php echo e(asset('customer/img/brand/burberry.png')); ?>" width="100px"
                                        alt="java img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo e(asset('customer/img/brand/chanel.png')); ?>" width="100px"
                                        alt="jquery img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo e(asset('customer/img/brand/gucci.png')); ?>" width="100px"
                                        alt="html5 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo e(asset('customer/img/brand/LV.png')); ?>" width="100px"
                                        alt="css3 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo e(asset('customer/img/brand/yame.jpg')); ?>" width="100px"
                                        alt="joomla img" /></a>
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
        $(function() {
            // alertMess
            setTimeout(() => {
                $('#alertMess').hide();
            }, 5000);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel prj\resources\views/customer/pages/index.blade.php ENDPATH**/ ?>