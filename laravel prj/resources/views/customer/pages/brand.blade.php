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
   <!-- product category -->
   <section id="aa-product-category">
     <div class="container">
       <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
           <div class="aa-product-catg-content">
             <div class="aa-product-catg-body">
               <ul class="aa-product-catg">
                 <!-- start single product item -->
                 @foreach ($data as $item)
                 <li>
                  <figure>
                    <a class="aa-product-img" href="{{asset("detail/$item->id")}}"><img src="{{asset("customer/img/$item->image")}}" width="100%" height="300px"></a>
                    <a class="aa-add-card-btn"href="{{asset("detail/$item->id")}}"><span class="fa fa-shopping-cart"></span>Detail</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="{{asset("detail/$item->id")}}">{{$item->name}}</a></h4>
                      <span class="aa-product-price">{{$item->price}}</span>
                    </figcaption>
                  </figure>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
                 @endforeach

               </ul>

             </div>
             <div class="aa-product-catg-pagination">
               <nav>
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>
             </div>
           </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
           <aside class="aa-sidebar">
             <!-- single sidebar -->
             <div class="aa-sidebar-widget">
               <h3>Brands</h3>


               <ul class="aa-catg-nav">
                @foreach ($navbar as $brand)
                <li><a href="{{asset("band/$brand->id")}}">{{$brand->name}}</a></li>
                @endforeach
               </ul>

             </div>
             <!-- single sidebar -->
             <div class="aa-sidebar-widget">
               <h3>Tags</h3>
               <div class="tag-cloud">
                 @foreach ($type as $typee)
                 <a href="{{asset("band/type/$typee->id")}}">{{$typee->name}}</a>
                 @endforeach
               </div>
             </div>
             <!-- single sidebar -->
             <div class="aa-sidebar-widget">
               <h3>Top Products</h3>
               <div class="aa-recently-views">
                 <ul>
                     @foreach ($top as $topPro)
                     <li>
                        <a href="{{asset("detail/$topPro->id")}}" class="aa-cartbox-img"><img src="{{ asset("customer/img/$topPro->image")}}"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="{{asset("detail/$topPro->id")}}">{{ $topPro->name }}</a></h4>
                          <p>${{ $topPro->price }}</p>
                        </div>
                      </li>
                     @endforeach
                 </ul>
               </div>
             </div>
             <!-- single sidebar -->
             <div class="aa-sidebar-widget">
               <h3>Sale Products</h3>
               <div class="aa-recently-views">
                 <ul>
                     @foreach ($sale as $sales)
                     <li>
                        <a href="{{asset("detail/$sales->id")}}" class="aa-cartbox-img"><img alt="img" src="{{ asset("customer/img/$sales->image")}}"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="{{asset("detail/$sales->id")}}">{{ $sales->name }}</a></h4>
                          <p>${{($sales['price'] - (($sales['price']* $sales['discout_item'])/100))}}</p>
                        </div>
                      </li>
                     @endforeach
                 </ul>
               </div>
             </div>
           </aside>
         </div>

       </div>
     </div>
   </section>
   <!-- / product category -->
@stop
@section('scripts')
{{--jquery.autocomplete.js--}}
{{-- <script src="{{asset('')}}https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
{{--quick defined--}}
<script>
   $(function () {
       // your custom javascript
   });
</script>
@stop
