<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Products section -->

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
                      src="<?php echo e(asset('customer/img/slider/2.jpg')); ?>"
                      alt="Wristwatch slide img"
                    />
                  </div>
                  <div class="seq-title">
                    <span data-seq>Save Up to 40% Off</span>
                    <h2 data-seq>Wristwatch Collection</h2>
                    <p data-seq>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Minus, illum.
                    </p>
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
                      src="<?php echo e(asset('customer/img/slider/3.jpg')); ?>"
                      alt="Women Jeans slide img"
                    />
                  </div>
                  <div class="seq-title">
                    <span data-seq>Save Up to 75% Off</span>
                    <h2 data-seq>Jeans Collection</h2>
                    <p data-seq>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Minus, illum.
                    </p>
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn"
                      >SHOP NOW</a
                    >
                  </div>
                </li>
                <!-- single slide item -->
                <li>
                  <div class="seq-model">
                    <img data-seq src="<?php echo e(asset('customer/img/slider/4.jpg')); ?>"alt="Shoes slide img" />
                  </div>
                  <div class="seq-title">
                    <span data-seq>Save Up to 75% Off</span>
                    <h2 data-seq>Exclusive Shoes</h2>
                    <p data-seq>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Minus, illum.
                    </p>
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
                      src="<?php echo e(asset('customer/img/slider/5.jpg')); ?>"
                      alt="Male Female slide img"
                    />
                  </div>
                  <div class="seq-title">
                    <span data-seq>Save Up to 50% Off</span>
                    <h2 data-seq>Best Collection</h2>
                    <p data-seq>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Minus, illum.
                    </p>
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
      <!-- Products section -->
      <section id="aa-product">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="aa-product-area">
                  <div class="aa-product-inner">
                    <!-- start prduct navigation -->
                    <ul class="nav nav-tabs aa-products-tab">
                      <li class="active">
                        <a href="#men" data-toggle="tab">Men</a>
                      </li>
                      <li><a href="#women" data-toggle="tab">Women</a></li>
                      <li><a href="#sports" data-toggle="tab">Sports</a></li>
                      <li>
                        <a href="#electronics" data-toggle="tab">Electronics</a>
                      </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!-- Start men product category -->
                      <div class="tab-pane fade in active" id="men">
                        <ul class="aa-product-catg">
                          <!-- start single product item -->
                          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/'.$item->image)); ?>"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="<?php echo e($item->id); ?>"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#"><?php echo e($item->name); ?></a>
                                </h4>
                                <span class="aa-product-price"><?php echo e($item->price); ?></span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
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
                      <!-- / men product category -->
                      <!-- start women product category -->
                      <div class="tab-pane fade" id="women">
                        <ul class="aa-product-catg">
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/women/girl-1.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="9"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">This is Title</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/women/girl-2.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="10"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/women/girl-3.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="11"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/women/girl-4.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="12"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sold-out" href="#"
                              >Sold Out!</span
                            >
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/women/girl-5.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="13"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>

                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/women/girl-6.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="14"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/women/girl-7.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="15"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/women/girl-1.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="16"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sold-out" href="#"
                              >Sold Out!</span
                            >
                          </li>
                        </ul>
                        <a class="aa-browse-btn" href="#"
                          >Browse all Product
                          <span class="fa fa-long-arrow-right"></span
                        ></a>
                      </div>
                      <!-- / women product category -->
                      <!-- start sports product category -->
                      <div class="tab-pane fade" id="sports">
                        <ul class="aa-product-catg">
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/sports/sport-1.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="17"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">This is Title</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/sports/sport-2.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="18"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sold-out" href="#"
                              >Sold Out!</span
                            >
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/sports/sport-3.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="19"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/sports/sport-4.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="20"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/sports/sport-5.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="21"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/sports/sport-6.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="22"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/sports/sport-7.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="23"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/sports/sport-8.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="24"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sold-out" href="#"
                              >Sold Out!</span
                            >
                          </li>
                        </ul>
                      </div>
                      <!-- / sports product category -->
                      <!-- start electronic product category -->
                      <div class="tab-pane fade" id="electronics">
                        <ul class="aa-product-catg">
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/electronics/electronic-1.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="25"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">This is Title</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/electronics/electronic-2.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="26"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sold-out" href="#"
                              >Sold Out!</span
                            >
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/electronics/electronic-3.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="27"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/electronics/electronic-4.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="28"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/electronics/electronic-5.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="29"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/electronics/electronic-6.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="30"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/electronics/electronic-7.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="31"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span
                                ><span class="aa-product-price"
                                  ><del>$65.50</del></span
                                >
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                          </li>
                          <!-- start single product item -->
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"
                                ><img
                                  src="<?php echo e(asset('customer/img/electronics/electronic-8.png')); ?>"
                                  alt="polo shirt img"
                              /></a>
                              <a
                                class="aa-add-card-btn"
                                data-product-id="32"
                                href="#"
                                ><span class="fa fa-shopping-cart"></span>Add To
                                Cart</a
                              >
                              <figcaption>
                                <h4 class="aa-product-title">
                                  <a href="#">Lorem ipsum doller</a>
                                </h4>
                                <span class="aa-product-price">$45.50</span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add to Wishlist"
                                ><span class="fa fa-heart-o"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Compare"
                                ><span class="fa fa-exchange"></span
                              ></a>
                              <a
                                href="#"
                                data-toggle2="tooltip"
                                data-placement="top"
                                title="Quick View"
                                data-toggle="modal"
                                data-target="#quick-view-modal"
                                ><span class="fa fa-search"></span
                              ></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sold-out" href="#"
                              >Sold Out!</span
                            >
                          </li>
                        </ul>
                        <a class="aa-browse-btn" href="#"
                          >Browse all Product
                          <span class="fa fa-long-arrow-right"></span
                        ></a>
                      </div>
                      <!-- / electronic product category -->
                    </div>
                    <!-- quick view modal -->
                    <div
                      class="modal fade"
                      id="quick-view-modal"
                      tabindex="-1"
                      role="dialog"
                      aria-labelledby="myModalLabel"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <button
                              type="button"
                              class="close"
                              data-dismiss="modal"
                              aria-hidden="true"
                            >
                              &times;
                            </button>
                            <div class="row">
                              <!-- Modal view slider -->
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="aa-product-view-slider">
                                  <div
                                    class="simpleLens-gallery-container"
                                    id="demo-1"
                                  >
                                    <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                        <a
                                          class="simpleLens-lens-image"
                                          data-lens-image="customer/img/view-slider/large/polo-shirt-1.png"
                                        >
                                          <img
                                            src="<?php echo e(asset('customer/img/view-slider/medium/polo-shirt-1.png')); ?>"
                                            class="simpleLens-big-image"
                                          />
                                        </a>
                                      </div>
                                    </div>
                                    <div class="simpleLens-thumbnails-container">
                                      <a
                                        href="#"
                                        class="simpleLens-thumbnail-wrapper"
                                        data-lens-image="customer/img/view-slider/large/polo-shirt-1.png"
                                        data-big-image="customer/img/view-slider/medium/polo-shirt-1.png"
                                      >
                                        <img
                                          src="<?php echo e(asset('customer/img/view-slider/thumbnail/polo-shirt-1.png')); ?>"
                                        />
                                      </a>
                                      <a
                                        href="#"
                                        class="simpleLens-thumbnail-wrapper"
                                        data-lens-image="customer/img/view-slider/large/polo-shirt-3.png"
                                        data-big-image="customer/img/view-slider/medium/polo-shirt-3.png"
                                      >
                                        <img
                                          src="<?php echo e(asset('customer/img/view-slider/thumbnail/polo-shirt-3.png')); ?>"
                                        />
                                      </a>

                                      <a
                                        href="#"
                                        class="simpleLens-thumbnail-wrapper"
                                        data-lens-image="customer/img/view-slider/large/polo-shirt-4.png"
                                        data-big-image="customer/img/view-slider/medium/polo-shirt-4.png"
                                      >
                                        <img
                                          src="<?php echo e(asset('customer/img/view-slider/thumbnail/polo-shirt-4.png')); ?>"
                                        />
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
                                    <span class="aa-product-view-price"
                                      >$34.99</span
                                    >
                                    <p class="aa-product-avilability">
                                      Avilability: <span>In stock</span>
                                    </p>
                                  </div>
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Officiis animi, veritatis
                                    quae repudiandae quod nulla porro quidem,
                                    itaque quis quaerat!
                                  </p>
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
                                    <a href="#" class="aa-add-to-cart-btn"
                                      ><span class="fa fa-shopping-cart"></span
                                      >Add To Cart</a
                                    >
                                    <a href="#" class="aa-add-to-cart-btn"
                                      >View Details</a
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- / quick view modal -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Products section -->
      <!-- banner section -->
      <section id="aa-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="aa-banner-area">
                  <a href="#"
                    ><img src="<?php echo e(asset('customer/img/fashion-banner.jpg')); ?>" alt="fashion banner img"
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
                      <a href="#popular" data-toggle="tab">Popular</a>
                    </li>
                    <li><a href="#featured" data-toggle="tab">Featured</a></li>
                    <li><a href="#latest" data-toggle="tab">Latest</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men popular category -->
                    <div class="tab-pane fade in active" id="popular">
                      <ul class="aa-product-catg aa-popular-slider">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-2.png')); ?>"
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
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-2.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="34"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sold-out" href="#"
                            >Sold Out!</span
                          >
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/t-shirt-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="35"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                          </figure>
                          <figcaption>
                            <h4 class="aa-product-title">
                              <a href="#">T-Shirt</a>
                            </h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sold-out" href="#"
                            >Sold Out!</span
                          >
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-3.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="36"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="37"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-4.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="38"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-4.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="39"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="40"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">This is Title</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                      </ul>
                      <a class="aa-browse-btn" href="#"
                        >Browse all Product
                        <span class="fa fa-long-arrow-right"></span
                      ></a>
                    </div>
                    <!-- / popular product category -->

                    <!-- start featured product category -->
                    <div class="tab-pane fade" id="featured">
                      <ul class="aa-product-catg aa-featured-slider">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-2.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="41"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-2.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="42"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sold-out" href="#"
                            >Sold Out!</span
                          >
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/t-shirt-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="43"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                          </figure>
                          <figcaption>
                            <h4 class="aa-product-title">
                              <a href="#">T-Shirt</a>
                            </h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sold-out" href="#"
                            >Sold Out!</span
                          >
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-3.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="44"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="45"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-4.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="46"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-4.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="47"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="48"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">This is Title</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                      </ul>
                      <a class="aa-browse-btn" href="#"
                        >Browse all Product
                        <span class="fa fa-long-arrow-right"></span
                      ></a>
                    </div>
                    <!-- / featured product category -->

                    <!-- start latest product category -->
                    <div class="tab-pane fade" id="latest">
                      <ul class="aa-product-catg aa-latest-slider">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-2.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="49"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-2.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="50"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sold-out" href="#"
                            >Sold Out!</span
                          >
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/t-shirt-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="51"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                          </figure>
                          <figcaption>
                            <h4 class="aa-product-title">
                              <a href="#">T-Shirt</a>
                            </h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sold-out" href="#"
                            >Sold Out!</span
                          >
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-3.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="52"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="53"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-4.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="54"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Lorem ipsum doller</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/man/polo-shirt-4.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="55"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">Polo T-Shirt</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"
                              ><img
                                src="<?php echo e(asset('customer/img/women/girl-1.png')); ?>"
                                alt="polo shirt img"
                            /></a>
                            <a
                              class="aa-add-card-btn"
                              data-product-id="56"
                              href="#"
                              ><span class="fa fa-shopping-cart"></span>Add To
                              Cart</a
                            >
                            <figcaption>
                              <h4 class="aa-product-title">
                                <a href="#">This is Title</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span
                              ><span class="aa-product-price"
                                ><del>$65.50</del></span
                              >
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Add to Wishlist"
                              ><span class="fa fa-heart-o"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Compare"
                              ><span class="fa fa-exchange"></span
                            ></a>
                            <a
                              href="#"
                              data-toggle2="tooltip"
                              data-placement="top"
                              title="Quick View"
                              data-toggle="modal"
                              data-target="#quick-view-modal"
                              ><span class="fa fa-search"></span
                            ></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                      </ul>
                      <a class="aa-browse-btn" href="#"
                        >Browse all Product
                        <span class="fa fa-long-arrow-right"></span
                      ></a>
                    </div>
                    <!-- / latest product category -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / popular section -->
      <!-- Support section -->
      <section id="aa-support">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-support-area">
                <!-- single support -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="aa-support-single">
                    <span class="fa fa-truck"></span>
                    <h4>FREE SHIPPING</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Quam, nobis.
                    </p>
                  </div>
                </div>
                <!-- single support -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="aa-support-single">
                    <span class="fa fa-clock-o"></span>
                    <h4>30 DAYS MONEY BACK</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Quam, nobis.
                    </p>
                  </div>
                </div>
                <!-- single support -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="aa-support-single">
                    <span class="fa fa-phone"></span>
                    <h4>SUPPORT 24/7</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Quam, nobis.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Support section -->
      <!-- Testimonial -->
      <section id="aa-testimonial">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-testimonial-area">
                <ul class="aa-testimonial-slider">
                  <!-- single slide -->
                  <li>
                    <div class="aa-testimonial-single">
                      <img
                        class="aa-testimonial-img"
                        src="<?php echo e(asset('customer/img/testimonial-img-2.jpg')); ?>"
                        alt="testimonial img"
                      />
                      <span class="fa fa-quote-left aa-testimonial-quote"></span>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Sunt distinctio omnis possimus, facere, quidem
                        qui!consectetur adipisicing elit. Sunt distinctio omnis
                        possimus, facere, quidem qui.
                      </p>
                      <div class="aa-testimonial-info">
                        <p>Allison</p>
                        <span>Designer</span>
                        <a href="#">Dribble.com</a>
                      </div>
                    </div>
                  </li>
                  <!-- single slide -->
                  <li>
                    <div class="aa-testimonial-single">
                      <img
                        class="aa-testimonial-img"
                        src="<?php echo e(asset('customer/img/testimonial-img-1.jpg')); ?>"
                        alt="testimonial img"
                      />
                      <span class="fa fa-quote-left aa-testimonial-quote"></span>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Sunt distinctio omnis possimus, facere, quidem
                        qui!consectetur adipisicing elit. Sunt distinctio omnis
                        possimus, facere, quidem qui.
                      </p>
                      <div class="aa-testimonial-info">
                        <p>KEVIN MEYER</p>
                        <span>CEO</span>
                        <a href="#">Alphabet</a>
                      </div>
                    </div>
                  </li>
                  <!-- single slide -->
                  <li>
                    <div class="aa-testimonial-single">
                      <img
                        class="aa-testimonial-img"
                        src="<?php echo e(asset('customer/img/testimonial-img-3.jpg')); ?>"
                        alt="testimonial img"
                      />
                      <span class="fa fa-quote-left aa-testimonial-quote"></span>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Sunt distinctio omnis possimus, facere, quidem
                        qui!consectetur adipisicing elit. Sunt distinctio omnis
                        possimus, facere, quidem qui.
                      </p>
                      <div class="aa-testimonial-info">
                        <p>Luner</p>
                        <span>COO</span>
                        <a href="#">Kinatic Solution</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Testimonial -->

      <!-- Latest Blog -->
      <section id="aa-latest-blog">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-latest-blog-area">
                <h2>LATEST BLOG</h2>
                <div class="row">
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                    <div class="aa-latest-blog-single">
                      <figure class="aa-blog-img">
                        <a href="#"
                          ><img src="<?php echo e(asset('customer/img/promo-banner-1.jpg')); ?>" alt="img"
                        /></a>
                        <figcaption class="aa-blog-img-caption">
                          <span href="#"><i class="fa fa-eye"></i>5K</span>
                          <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                          <a href="#"><i class="fa fa-comment-o"></i>20</a>
                          <span href="#"
                            ><i class="fa fa-clock-o"></i>June 26, 2016</span
                          >
                        </figcaption>
                      </figure>
                      <div class="aa-blog-info">
                        <h3 class="aa-blog-title">
                          <a href="#">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Assumenda, ad? Autem quos natus nisi aperiam,
                          beatae, fugiat odit vel impedit dicta enim repellendus
                          animi. Expedita quas reprehenderit incidunt, voluptates
                          corporis.
                        </p>
                        <a href="#" class="aa-read-mor-btn"
                          >Read more <span class="fa fa-long-arrow-right"></span
                        ></a>
                      </div>
                    </div>
                  </div>
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                    <div class="aa-latest-blog-single">
                      <figure class="aa-blog-img">
                        <a href="#"
                          ><img src="<?php echo e(asset('customer/img/promo-banner-3.jpg')); ?>" alt="img"
                        /></a>
                        <figcaption class="aa-blog-img-caption">
                          <span href="#"><i class="fa fa-eye"></i>5K</span>
                          <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                          <a href="#"><i class="fa fa-comment-o"></i>20</a>
                          <span href="#"
                            ><i class="fa fa-clock-o"></i>June 26, 2016</span
                          >
                        </figcaption>
                      </figure>
                      <div class="aa-blog-info">
                        <h3 class="aa-blog-title">
                          <a href="#">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Assumenda, ad? Autem quos natus nisi aperiam,
                          beatae, fugiat odit vel impedit dicta enim repellendus
                          animi. Expedita quas reprehenderit incidunt, voluptates
                          corporis.
                        </p>
                        <a href="#" class="aa-read-mor-btn"
                          >Read more <span class="fa fa-long-arrow-right"></span
                        ></a>
                      </div>
                    </div>
                  </div>
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                    <div class="aa-latest-blog-single">
                      <figure class="aa-blog-img">
                        <a href="#"
                          ><img src="<?php echo e(asset('customer/img/promo-banner-1.jpg')); ?>" alt="img"
                        /></a>
                        <figcaption class="aa-blog-img-caption">
                          <span href="#"><i class="fa fa-eye"></i>5K</span>
                          <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                          <a href="#"><i class="fa fa-comment-o"></i>20</a>
                          <span href="#"
                            ><i class="fa fa-clock-o"></i>June 26, 2016</span
                          >
                        </figcaption>
                      </figure>
                      <div class="aa-blog-info">
                        <h3 class="aa-blog-title">
                          <a href="#">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Assumenda, ad? Autem quos natus nisi aperiam,
                          beatae, fugiat odit vel impedit dicta enim repellendus
                          animi. Expedita quas reprehenderit incidunt, voluptates
                          corporis.
                        </p>
                        <a href="#" class="aa-read-mor-btn"
                          >Read more <span class="fa fa-long-arrow-right"></span
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Latest Blog -->

      <!-- Client Brand -->
      <section id="aa-client-brand">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-client-brand-area">
                <ul class="aa-client-brand-slider">
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-java.png')); ?>" alt="java img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-jquery.png')); ?>" alt="jquery img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-html5.png')); ?>" alt="html5 img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-css3.png')); ?>" alt="css3 img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img
                        src="<?php echo e(asset('customer/img/client-brand-wordpress.png')); ?>"
                        alt="wordPress img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-joomla.png')); ?>" alt="joomla img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-java.png')); ?>" alt="java img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-jquery.png')); ?>" alt="jquery img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-html5.png')); ?>" alt="html5 img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="<?php echo e(asset('customer/img/client-brand-css3.png')); ?>" alt="css3 img"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img
                        src="<?php echo e(asset('customer/img/client-brand-wordpress.png')); ?>"
                        alt="wordPress img"
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
      <section id="aa-subscribe">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-subscribe-area">
                <h3>Subscribe our newsletter</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex,
                  velit!
                </p>
                <form action="" class="aa-subscribe-form">
                  <input
                    type="email"
                    name=""
                    id=""
                    placeholder="Enter your Email"
                  />
                  <input type="submit" value="Subscribe" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Products section -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<script>
   $(function () {
       // your custom javascript
   });
</script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Download\laravel prj_2\laravel prj\resources\views/customer/pages/index.blade.php ENDPATH**/ ?>