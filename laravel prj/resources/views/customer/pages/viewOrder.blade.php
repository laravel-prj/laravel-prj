
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

      <!-- Cart view section -->
      <section id="cart-view">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="cart-view-area">
                <div class="cart-view-table">
                  <form>
                    <div class="table-responsive">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Order Date</th>
                             <th>Status</th>
                             <th>Delivery Time</th>
                             <th>Total Item</th>
                             <th>Total Discount</th>
                             <th>Total Price</th>
                           </tr>
                         </thead>
                         <tbody id="tableBody">
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $cus['first_name'] .' '. $cus['last_name'] }}</td>
                                    <td>{{ $order->order_date}}</td>
                                    <td>
                                    @if ($order->status == 0)
                                        <span>Delivering</span>
                                    @else
                                        <span>Success</span>
                                    @endif</td>
                                    <td>
                                        @if ($order->delivery_time)
                                        {{ $order->delivery_time }}
                                            
                                        @else
                                            ---
                                        @endif
                                    </td>
                                    <td>{{ $order->total_item }}</td>
                                    <td>{{ $order->total_discount }}</td>
                                    <td>{{ $order->total_price }}</td>
                                </tr>
                                @endforeach

                           </tbody>
                       </table>
                     </div>
                  </form>
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




