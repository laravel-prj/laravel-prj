<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span>00-62-658-658</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                <li><a href="<?php echo e(asset('editAcc')); ?>">My Account</a></li>
                                <li class="hidden-xs"><a href="<?php echo e(asset('cart')); ?>">My Cart</a></li>
                                <li class="hidden-xs"><a href="<?php echo e(asset('checkout')); ?>">Checkout</a></li>
                                <?php if(Auth::guard('loyal_customer')->check()): ?>
                                    <li><a href="<?php echo e(asset('logout')); ?>">Logout</a></li>

                                <?php else: ?>
                                    <li><a href="<?php echo e(asset('login')); ?>">Login</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="<?php echo e(asset('/')); ?>">
                                <span class="fa fa-shopping-cart"></span>
                                <p>MO<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <div id="loadGif" style="display: inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style=" background: rgb(241, 242, 243); display: block;" width="50px" height="50px"
                                    viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                    <g transform="rotate(0 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(30 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(60 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.75s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(90 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(120 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(150 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.5s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(180 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(210 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(240 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.25s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(270 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(300 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(330 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#85a2b6">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="0s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                </svg>
                            </div>
                            <div id="shopCart" style="display: none">
                                <a class="aa-cart-link" href="<?php echo e(asset('cart')); ?>">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">SHOPPING CART</span>
                                    <span id="currentQuantity" class="aa-cart-notify">
                                        
                                    </span>
                                </a>
                                <div class="aa-cartbox-summary">
                                    <ul id="cartHeader">
                                       
                                    </ul>
                                    <a class="aa-cartbox-checkout aa-primary-btn" href="<?php echo e(asset('checkout')); ?>">Checkout</a>
                                </div>
                            </div>

                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="">
                                <input type="text" name="" id="">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo e(asset('/')); ?>">Home</a></li>
                        <li>
                            <a href="<?php echo e(asset('/shop')); ?>">Brands <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <?php $__currentLoopData = $navbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(asset("band/$item->id")); ?>"><?php echo e($item->name); ?><span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="<?php echo e(asset("band/type/$typ->id")); ?>">
                                                        <?php echo e($typ->name); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </li>
                    </ul>
                    <li><a href="<?php echo e(asset('/contact')); ?>">Contact</a></li>
                    <li><a href="<?php echo e(asset('/about')); ?>">About Us</a></li>
                    <li>
                        <a href="#">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo e(asset('/shop')); ?>">Shop Page</a></li>
                            <li><a href="<?php echo e(asset('/topProduct')); ?>">Top Products</a></li>
                            <li><a href="<?php echo e(asset('/saleProduct')); ?>">Sale Products</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/customer/partial/header.blade.php ENDPATH**/ ?>