@extends('customer.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
{{--custom css item suggest search--}}
<style>
    .t-alert{
        position: absolute;
        top: 118px;
        left: 0;
        right: 0;
    }
</style>
@stop
@section('content')
 <!-- Cart view section -->
 <section id="checkout">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="checkout-area">
           <form method="POST" action="/updateAcc"  style="margin-left: 300px">
             <div class="row">
               <div class="col-md-8">
                 <div class="checkout-left">
                   <div class="panel-group" id="accordion">
                     <!-- Register -->
                     <div class="panel panel-default aa-checkout-billaddress">
                       <div class="panel-heading">
                         <h4 class="panel-title">
                           <a data-toggle="collapse" href="#collapseThree" >
                             Information
                           </a>
                         </h4>
                       </div>
                       <div id="collapseThree" class="panel-collapse collapse.show">
                         <div class="panel-body">
                           <div class="row">
                             <div class="col-md-6">
                               <div class="aa-checkout-single-bill">
                                 <input type="text" placeholder="First Name*" name="first_name" value="{{ $cus->first_name }}">
                               </div>
                             </div>
                             <div class="col-md-6">
                               <div class="aa-checkout-single-bill">
                                 <input type="text" placeholder="Last Name*" name="last_name"  value="{{ $cus->last_name }}">
                               </div>
                             </div>
                           </div>


                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Address" name="address"  value="{{ $cus->address }}">
                              </div>
                            </div>
                          </div>
                           <div class="row">
                             <div class="col-md-12">
                               <div class="aa-checkout-single-bill">
                                 <input type="date" placeholder="Birthday" name="birthday"  value="{{ $cus->birthday }}">
                               </div>
                             </div>
                           </div>
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <strong>
                                  <b>
                                    <select name="gender">
                                      @if ($cus->gender == 0) {
                                       <option selected value="0">Male</option>
                                       <option value="1">Female</option>
                                      }
                                      @else
                                      <option value="0">Male</option>
                                      <option selected value="">Female</option>
                                      @endif
                                     {{-- <option value="0" >Male</option>
                                     <option value="1">Female</option> --}}
                                   </select>
                                  </b>

                                </strong>

                              </div>
                            </div>
                          </div>
                          <div class="row">
                             <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="City" name="city"  value="{{ $cus->city }}">
                                </div>
                              </div>
                             <div class="col-md-6">
                               <div class="aa-checkout-single-bill">
                                 <input type="tel" placeholder="Phone*" name="tel"  value="{{ $cus->tel }}">
                               </div>
                             </div>
                           </div>
                           <input type="submit" value="update" name="update" style="width: 200px;">
                           <span> <a href="{{ asset("/updatePass") }}"> <input type="button" name="password"  value="edit password" ></a> </span>




                            </div>
                          </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             @csrf
           </form>
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
</script>
@stop
