
@extends('customer.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
{{--custom css item suggest search--}}
<style>
</style>
@stop
@section('content')
    <!-- Products section -->

    <section id="aa-catg-head-banner">
        <img src="{{asset('customer/img/fashion/fashion-header-bg-8.jpg')}}" alt="fashion img">
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
                            @foreach ($cart as $key => $item)
                                <tr id = "tr{{$key}}">
                                    <td onclick="removeCart({{$key}})"><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                                    <td><a href="#"><img src="{{asset('/customer/img/' . $item['image'])}}" alt="img"></a></td>
                                    <td><a class="aa-cart-title" href="#">{{$item['name']}}</a></td>
                                    <td>{{$item['size']}}</td>
                                    <td>
                                        {{$item['price']}}$
                                    </td>
                                    <td>
                                        {{-- <input type="number" min="{{$firstMin}}" max="{{$firstMax}}" name="current_quantity" id="current_quantity" value={{$firstValue}}> --}}


                                        <input class="aa-cart-quantity" type="number" min="1" max="{{$item['max']}}"
                                        name="{{$key}}"
                                        onchange="return changeQuantity({{$key}}, {{$item['price']}}, {{$item['discout_item']}}, this.value);" value="{{$item['current_quantity']}}">
                                    </td>
                                    <td>{{$item['discout_item']}}%</td>
                                    <td class="subMoney" id="money{{$key}}">{{($item['price'] * $item['current_quantity']) - (($item['price'] * $item['current_quantity']) * ($item['discout_item'] / 100))}}$</td>
                                </tr>
                            @endforeach

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
                          <td id="totalMoney">{{$totalMoney}}$</td>
                        </tr>
                      </tbody>
                    </table>
                    <a href="{{asset('checkout')}}" class="aa-cart-view-btn">Proced to Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Cart view section -->



@stop
@section('scripts')
{{--jquery.autocomplete.js--}}
{{-- <script src="{{asset('')}}https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
{{--quick defined--}}
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
@stop




