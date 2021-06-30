@extends('customer.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
{{--custom css item suggest search--}}
<style>
    .about {
    position: relative;
    width: 100%;
    padding: 45px 0;
}

.about .section-header {
    margin-bottom: 30px;
    margin-left: 0;
    margin-top: 50px;
}

.about .about-img {
    position: relative;
    height: 100%;
    margin-top: 50px;
}

.about .about-img img {
    position: relative;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.about .about-text p {
    font-size: 16px;
}

.about .about-text a.btn {
    position: relative;
    margin-top: 30px;
    padding: 12px 20px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #F7CAC9;
    background: #343148;
    border-radius: 0;
    transition: .3s;
}

.about .about-text a.btn:hover {
    color: #343148;
    background: #F7CAC9;
}

@media (max-width: 767.98px) {
    .about .about-img {
        margin-bottom: 30px;
        height: auto;
    }
}
.team {
    position: relative;
    width: 100%;
    padding: 45px 0 15px 0;
}

.team .team-item {
    position: relative;
    margin-bottom: 30px;
    padding: 15px;
    background: #ffffff;
    border: 1px solid rgba(0, 0, 0, .07);
}

.team .team-img {
    position: relative;
    overflow: hidden;
}

.team .team-img img {
    position: relative;
    width: 100%;
}

.team .team-social {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .5s;
}

.team .team-social a {
    position: relative;
    margin: 0 3px;
    margin-top: 100px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 40px;
    font-size: 16px;
    color: #F7CAC9;
    background: #343148;
    opacity: 0;
}

.team .team-social a:hover {
    color: #343148;
    background: #F7CAC9;
}


.team .team-item:hover .team-social {
    background: rgba(256, 256, 256, .5);
}

.team .team-item:hover .team-social a:first-child {
    opacity: 1;
    margin-top: 0;
    transition: .3s 0s;
}

.team .team-item:hover .team-social a:nth-child(2) {
    opacity: 1;
    margin-top: 0;
    transition: .3s .1s;
}

.team .team-item:hover .team-social a:nth-child(3) {
    opacity: 1;
    margin-top: 0;
    transition: .3s .2s;
}

.team .team-item:hover .team-social a:nth-child(4) {
    opacity: 1;
    margin-top: 0;
    transition: .3s .3s;
}

.team .team-text {
    position: relative;
    padding: 25px 15px 10px 15px;
    text-align: center;
    background: #ffffff;
}

.team .team-text h2 {
    font-size: 18px;
    font-weight: 600;
}

.team .team-text p {
    margin: 0;
}
</style>
@stop
@section('content')
        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{asset('customer/img/about.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2>Welcome to MO shop</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                MO shop is your global online store that delivers latest fashion apparel for you! We have tops, bottoms for all people. Thousands of products in different styles are waiting for you!

We value all our customers:

our professional customer service team is always here to help you. Your satisfaction is our top priority!

Moreover, you can easily get your order anywhere in the world thanks to our worldwide shipping service!

Enjoy your shopping at MOshop.


                            </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                   <h3><p><b>Shop's Designers</b> </p></h3> 
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('customer/img/team-1.jpg')}}" alt="Image">
                                
                            </div>
                            <div class="team-text">
                                <h2>Millie Harper</h2>
                                <p>MO's Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('customer/img/team-2.jpg')}}" alt="Image">
                                
                            </div>
                            <div class="team-text">
                                <h2>Lilly Fry</h2>
                                <p>MO's Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('customer/img/team-3.jpg')}}" alt="Image">
                                
                            </div>
                            <div class="team-text">
                                <h2>Elise Moran</h2>
                                <p>MO's Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('customer/img/team-4.jpg')}}" alt="Image">
                                
                            </div>
                            <div class="team-text">
                                <h2>Kate Glover</h2>
                                <p>MO's Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
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