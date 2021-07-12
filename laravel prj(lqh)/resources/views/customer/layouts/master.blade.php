
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{--Styles css common--}}
    <link href="{{asset("customer/css/font-awesome.css")}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset("customer/css/bootstrap.css")}}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset("customer/css/jquery.smartmenus.bootstrap.css")}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href={{asset("customer/css/jquery.simpleLens.css")}}>
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href={{asset("customer/css/slick.css")}}>
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href={{asset("customer/css/nouislider.css")}}>

    <link id="switcher"rel="stylesheet" href={{asset("customer/css/theme-color/default-theme.css")}} >
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href={{asset("customer/css/sequence-theme.modern-slide-in.css")}} rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href={{asset("customer/css/style.css")}} rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    @yield('style-libraries')
    {{--Styles custom--}}
    @yield('styles')
</head>
<body>
    <div class="container-storage">

        @include('customer.partial.header')

        @yield('content')

        @include('customer.partial.footer')
    </div>

    {{--Scripts js common--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset("customer/js/bootstrap.js")}}"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{asset("customer/js/jquery.smartmenus.js")}}"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="{{asset("customer/js/jquery.smartmenus.bootstrap.js")}}"></script>
    <!-- To Slider JS -->
    <script src="{{asset("customer/js/sequence.js")}}"></script>
    <script src="{{asset("customer/js/sequence-theme.modern-slide-in.js")}}"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="{{asset("customer/js/jquery.simpleGallery.js")}}"></script>
    <script type="text/javascript" src="{{asset("customer/js/jquery.simpleLens.js")}}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{asset("customer/js/slick.js")}}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{asset("customer/js/nouislider.js")}}"></script>
    <!-- Custom js -->
    <script src="{{asset("customer/js/custom.js")}}"></script>

    {{--Scripts link to file or js custom--}}
    <script src="{{asset("customer/js/products.js")}}"></script>
    <!-- Cart js -->
    <script src="{{asset("customer/js/cart.js")}}"></script>
    @yield('scripts')
    <script>
        function bigImg(x){
            x.style.height ="200px";
            x.style.width = "200px";
        }

        function normalImg(x){
            x.style.height = "180px";
            x.style.width = "180px";
        }

        $("[type='number']").keypress(function (evt) {
            evt.preventDefault();
        });
    </script>
</body>
</html>
