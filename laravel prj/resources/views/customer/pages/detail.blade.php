@extends('customer.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
    {{-- custom css item suggest search --}}
    <style>
        .image {
            width: 45px;
            height: 50px;
        }

    </style>
@stop
@section('content')

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
                                                    <a data-lens-image="{{ asset("customer/img/$item->image") }}"
                                                        class="simpleLens-lens-image"><img
                                                            src="{{ asset("customer/img/$item->image") }}"
                                                            class="simpleLens-big-image"></a>
                                                </div>
                                            </div>
                                            <div class="simpleLens-thumbnails-container">
                                                @foreach ($listImage as $image)
                                                    <a data-big-image="{{ asset("customer/img/$image") }}"
                                                        data-lens-image="{{ asset("customer/img/$image") }}"
                                                        class="simpleLens-thumbnail-wrapper" href="#">
                                                        <img src="{{ asset("customer/img/$image") }}" class="image">
                                                    </a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3 id="itemName">{{ $item->name }}</h3>
                                        <div class="aa-price-block">
                                            <span class="aa-product-view-price">{{ $item->price }}</span>
                                            <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                        </div>
                                        <form id="formItemDetail">
                                            <div class="aa-prod-quantity">
                                                <h4>Size</h4>
                                                @foreach ($listSize as $size)
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" @if ($loop->index == 0) checked @endif name="size" value="{{ $size->id }}"
                                                            onchange="sizechange({{ $size->id }})">
                                                        <label class="custom-control-label"
                                                            for="defaultInline1">{{ $size->size }}</label>
                                                    </div>
                                                @endforeach

                                                <input type="number" min="{{ $firstMin }}" max="{{ $firstMax }}"
                                                    name="current_quantity" id="current_quantity"
                                                    value={{ $firstValue }}>
                                                <input type="hidden" id="itemPrice" name="price"
                                                    value="{{ $item->price }}">
                                                <input type="hidden" id="itemName" name="name" value="{{ $item->name }}">
                                                <input type="hidden" id="itemDiscount" name="discount"
                                                    value="{{ $item->discout_item }}">
                                                <input type="hidden" id="itemImage" name="discount"
                                                    value="{{ $item->image }}">
                                                <div id="loadQuantityGif" style="display: none">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        style=" background: rgb(241, 242, 243); display: block;"
                                                        width="50px" height="50px" viewBox="0 0 100 100"
                                                        preserveAspectRatio="xMidYMid">
                                                        <g transform="rotate(0 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.9166666666666666s"
                                                                    repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(30 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.8333333333333334s"
                                                                    repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(60 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.75s" repeatCount="indefinite">
                                                                </animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(90 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.6666666666666666s"
                                                                    repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(120 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.5833333333333334s"
                                                                    repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(150 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.5s" repeatCount="indefinite">
                                                                </animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(180 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.4166666666666667s"
                                                                    repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(210 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.3333333333333333s"
                                                                    repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(240 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.25s" repeatCount="indefinite">
                                                                </animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(270 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.16666666666666666s"
                                                                    repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(300 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="-0.08333333333333333s"
                                                                    repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                        <g transform="rotate(330 50 50)">
                                                            <rect x="47" y="24" rx="3" ry="6" width="6" height="12"
                                                                fill="#85a2b6">
                                                                <animate attributeName="opacity" values="1;0" keyTimes="0;1"
                                                                    dur="1s" begin="0s" repeatCount="indefinite"></animate>
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                </div>

                                                <p class="aa-prod-category">
                                                    Category: <a href="#">name</a>
                                                </p>
                                            </div>
                                            <div class="aa-prod-view-bottom">
                                                @if ($firstValue == 0)
                                                    <span id="soldOut" class="aa-add-to-cart-btn btn-danger"
                                                        onclick="return alert('Sold Out');"
                                                        style="display: inline-block;">Sold Out</span>
                                                    <a id="addToCart" class="aa-add-to-cart-btn" onclick="addToCart()"
                                                        style="display:none;">Add To Cart</a>
                                                @else
                                                    <span id="soldOut" class="aa-add-to-cart-btn btn-danger"
                                                        onclick="return alert('Sold Out');" style="display:none;">Sold
                                                        Out</span>
                                                    <a id="addToCart" class="aa-add-to-cart-btn" onclick="addToCart()">Add
                                                        To Cart</a>
                                                @endif



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
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Top product -->
                        <div class="aa-product-related-item">
                            <h3>Top Products</h3>
                            <ul class="aa-product-catg aa-related-item-slider">
                                <!-- start single product item -->
                                @foreach ($data as $top)
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="{{asset("customer/img/$top->image")}}"
                                               ></a>
                                        <a class="aa-add-card-btn" data-product-id="{{$top->id}}" href="{{asset("detail/$top->id")}}"><span class="fa fa-shopping-cart">
                                            </span>Details
                                        </a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">{{$top->name}}</a></h4>
                                            <span class="aa-product-price">${{$top->price}}</span>
                                        </figcaption>
                                    </figure>
                                </li>
                                @endforeach
                                
                            </ul>
                            <!-- quick view modal -->
                            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                            <div class="row">
                                                <!-- Modal view slider -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-slider">
                                                        <div class="simpleLens-gallery-container" id="demo-1">
                                                            <div class="simpleLens-container">
                                                                <div class="simpleLens-big-image-container">
                                                                    <a class="simpleLens-lens-image"
                                                                        data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                        <img src="img/view-slider/medium/polo-shirt-1.png"
                                                                            class="simpleLens-big-image">
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
                                                            <p class="aa-product-avilability">Avilability: <span>In
                                                                    stock</span></p>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Officiis animi, veritatis quae repudiandae quod nulla porro
                                                            quidem, itaque quis quaerat!</p>
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
                                                            <a href="#" class="aa-add-to-cart-btn"><span
                                                                    class="fa fa-shopping-cart"></span>Add To Cart</a>
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
@stop
@section('scripts')
    {{-- jquery.autocomplete.js --}}
    {{-- <script src="{{asset('')}}https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
    {{-- quick defined --}}
    <script>
        function sizechange(id) {
            $('#current_quantity').hide();
            $('#addToCart').hide();

            $('#loadQuantityGif').attr('style', 'display: block;');
            $('#current_quantity').val(1);
            $.ajax({
                type: "GET",
                url: window.location.origin + "/api/ajaxGetSizeById/",
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response[0]);

                    if (response[1] !== null) {
                        $('#current_quantity').attr('max', response[1]);
                        $('#current_quantity').attr('min', 1);
                        if (response[1] == 0) {
                            $('#current_quantity').attr('min', response[1]);
                            $('#current_quantity').val(0);
                        }
                    } else {
                        $('#current_quantity').attr('max', response[0]);
                        $('#current_quantity').attr('min', 1);
                    }
                    if (response[0] == 0) {
                        $('#current_quantity').attr('min', 0);
                        $('#current_quantity').attr('max', 0);
                        $('#current_quantity').val(0);
                    }
                }
            }).done(function(data) {
                $('#loadQuantityGif').attr('style', 'display: none;');
                if (data[1] == 0) {
                    $('#soldOut').attr('style', 'display: inline-block;'); // hien nut soulout
                    $('#addToCart').hide(); // an di nut dat hang
                } else {
                    $('#addToCart').show(); // hien nut dat hang
                    $('#soldOut').attr('style', 'display: none;'); // an di nut soulout
                }
                if (data[0] == 0) {
                    $('#soldOut').attr('style', 'display: inline-block;'); // hien nut soulout
                    $('#addToCart').hide(); // an di nut dat hang
                }
                $('#current_quantity').show();
            });
        }
    </script>
@stop
