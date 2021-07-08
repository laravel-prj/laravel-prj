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
<section id="checkout">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <div class="checkout-area">
         <form method="POST" action="/postUpdatePass"  style="margin-left: 300px">
           <div class="row">
             <div class="col-md-8">
               <div class="checkout-left">
                 <div class="panel-group" id="accordion">
                   <!-- Register -->
                   <div class="panel panel-default aa-checkout-billaddress">
                     <div class="panel-heading">
                       <h4 class="panel-title">
                         <a data-toggle="collapse" href="#collapseThree" >
                           Update Password
                         </a>
                       </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse.show">
                       <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="aa-checkout-single-bill">
                              <input type="password" placeholder="Password*" name="current_password" id="current_password">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col-md-12">
                           <div class="aa-checkout-single-bill">
                             <input type="password" placeholder="New Password*" name="password" id="password">
                           </div>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-md-12">
                           <div class="aa-checkout-single-bill">
                             <input type="password" placeholder="Confirm Password*" name="password_confirmation" id="password_confirmation">
                           </div>
                         </div>
                       </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="aa-checkout-single-bill">
                            <button type="submit">Submit</button>
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
@stop
@section('scripts')
{{--jquery.autocomplete.js--}}
{{-- <script src="{{asset('')}}https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
{{--quick defined--}}
<script>
</script>
@stop
