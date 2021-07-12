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
<section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">
             <div class="row">
               <div class="col-md-6">
                 <div class="aa-myaccount-login">
                  <form method="post" class="aa-login-form">
                   <label for=""> Email address<span>*</span></label>
                    <input name="email" type="text" placeholder="Your email">
                     <button type="submit" class="aa-browse-btn">Send</button>
                     {{ csrf_field() }}
                   </form>
                 </div>
               </div>
             </div>
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