@extends('customer.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
    {{-- custom css item suggest search --}}
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
@stop
@section('content')
    <!-- Products section -->
    @if (!empty($msg))
        <section id="alertMess" class="alert alert-success t-alert">
            <div> <span><i style="font-size: 24px;" class="fa fa-bell" aria-hidden="true"> {{ $msg }}</i></span>
            </div>
        </section>
    @endif
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="{{ asset('customer/img/sale.jpg') }}" style="height: 500px" />
                            </div>
                            <div class="seq-title">
                                <a data-seq href="{{ asset('/shop') }}" class="aa-shop-now-btn aa-secondary-btn">SHOP
                                    NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="{{ asset('customer/img/slide2.jpg') }}" style="height: 500px" />
                            </div>
                            <div class="seq-title">
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="{{ asset('customer/img/slide3.jpg') }}" style="height: 500px" />
                            </div>
                            <div class="seq-title">
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
                                        @foreach ($data as $item)

                                            <li>
                                                <figure>

                                                    <a class="aa-product-img" href="{{ asset("detail/$item->id") }}">
                                                        @if (isset($item->image))
                                                            <img src="{{ asset("customer/img/$item->image") }}"
                                                                alt="polo shirt img" width="100%" height="300px" />
                                                        @else
                                                            <img src="{{ asset('customer/img/no_image.png') }}"
                                                                alt="polo shirt img" width="100%" height="300px" />
                                                        @endif

                                                    </a>
                                                    <a class="aa-add-card-btn" data-product-id="{{ $item->id }}"
                                                        href="{{ asset("detail/$item->id") }}"><span
                                                            class="fa fa-shopping-cart">
                                                        </span>Details
                                                    </a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title">
                                                            <a href="#">{{ $item->name }}</a>
                                                        </h4>
                                                        <span class="aa-product-price">{{ $item->price }}</span>
                                                        {{-- <span class="aa-product-price"><del>$65.50</del></span> --}}
                                                    </figcaption>
                                                </figure>
                                                <span class="aa-badge aa-sold-out" href="#">Hot</span>
                                            </li>

                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="{{ asset('/topProduct') }}">Browse all Product
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
                                        @foreach ($sale as $saleitem)
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img"
                                                        href="{{ asset("detail/$saleitem->id") }}"><img
                                                            src="{{ asset("customer/img/$saleitem->image") }}"
                                                            width="100%" height="300px" /></a>
                                                    <a class="aa-add-card-btn" data-product-id="{{ $saleitem->id }}"
                                                        href="{{ asset("detail/$saleitem->id") }}"><span
                                                            class="fa fa-shopping-cart">
                                                        </span>Details
                                                    </a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title">
                                                            <a
                                                                href="{{ asset("detail/$saleitem->id") }}">{{ $saleitem->name }}</a>
                                                        </h4>
                                                        <span
                                                            class="aa-product-price">{{ $saleitem['price'] - ($saleitem['price'] * $saleitem['discout_item']) / 100 }}</span><span
                                                            class="aa-product-price"><del>{{ $saleitem->price }}</del></span>
                                                    </figcaption>
                                                </figure>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <a class="aa-browse-btn" href="{{ asset('/saleProduct') }}">Browse all Product
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
                            @foreach ($navbar as $brand)
                                <li>
                                    <a href="{{ asset("band/$brand->id") }}"><img
                                            src="{{ asset("customer/img/$brand->img") }}" width="100px" /></a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->

    <!-- Subscribe section -->

    <!-- / Products section -->
@stop
@section('scripts')
    {{-- jquery.autocomplete.js --}}
    {{-- <script src="{{asset('')}}https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
    {{-- quick defined --}}
    <script>
        $(function() {
            // alertMess
            setTimeout(() => {
                $('#alertMess').hide();
            }, 5000);
        });
    </script>
@stop
