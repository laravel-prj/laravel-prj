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
                                <li><a href="{{asset('editAcc')}}">My Account</a></li>
                                <li class="hidden-xs"><a href="{{ asset('cart') }}">My Cart</a></li>
                                <li class="hidden-xs"><a href="{{ asset('checkout') }}">Checkout</a></li>
                                @if (Auth::guard('loyal_customer')->check())
                                    <li><a href="{{ asset('logout') }}">Logout</a></li>

                                @else
                                    <li><a href="{{ asset('login') }}">Login</a></li>
                                @endif
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
                            <a href="{{ asset('/') }}">
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
                                <a class="aa-cart-link" href="{{ asset('cart') }}">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">SHOPPING CART</span>
                                    <span id="currentQuantity" class="aa-cart-notify">
                                        {{-- @if ($totalCurrentQuantity)
                                {{$totalCurrentQuantity}}
                            @else
                                0
                            @endif --}}
                                    </span>
                                </a>
                                <div class="aa-cartbox-summary">
                                    <ul id="cartHeader">

                                    </ul>
                                    <a class="aa-cartbox-checkout aa-primary-btn" href="{{asset('checkout')}}">Checkout</a>
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
                        <li><a href="{{asset('/')}}">Home</a></li>
                        <li>
                            <a href="{{asset('/shop')}}">Brands <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                {{-- {{route('brand', ['brandId' => $brand->id])}} --}}
                                @foreach ($navbar as $item)
                                    <li>
                                        <a href="{{ route('brand', ['brandId' => $item->id]) }}">{{ $item->name }}<span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu">
<<<<<<< .mine
                                            @foreach ($item->type as $typ)
                                            {{-- asset("band/type/$typ->id") --}}
                                                <li><a href="{{ route('brand', ['brandId' => $item->id, 'typeName' => $typ->name]) }}">
=======
                                            @foreach ($item->type as $typ)
                                                <li><a href="{{ asset("band/type/$typ->id") }}">

>>>>>>> .theirs
                                                        {{ $typ->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                @endforeach

                        </li>
                    </ul>
                    <li><a href="{{ asset('/contact') }}">Contact</a></li>
                    <li><a href="{{ asset('/about') }}">About Us</a></li>
                    <li>
                        <a href="#">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{asset('/shop')}}">Shop Page</a></li>
                            <li><a href="{{asset('/topProduct')}}">Top Products</a></li>
                            <li><a href="{{asset('/saleProduct')}}">Sale Products</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
