<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fundraiser &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



    @include('frontend.header')


    @yield('content')


   @include('frontend.footer')
    </div>

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('frontend/js/aos.js')}}"></script>

    <script src="{{ asset('frontend/js/main.js')}}"></script>

  </body>

</html>
