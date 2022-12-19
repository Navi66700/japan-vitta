<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Japan Vitta | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('homepage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('homepage/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/assets/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/assets/css/lightbox.css')}}">

    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

    </style>
</head>

<body>
<!--header-->
<header class="main-header clearfix" role="header">
    <div class="logo">
        <a href="#"><em>JAPAN</em> VITTA</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="has-submenu"><a href="#">Levels</a>
                <ul class="sub-menu">
                    <li><a href="level04.html">N 05</a></li>
                    <li><a href="#">N 04</a></li>
                    <li><a href="#">N 03</a></li>
                    <li><a href="#">N 02</a></li>
                    <li><a href="#">N 01</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#">Past Papers</a>
                <ul class="sub-menu">
                    <li><a href="level04.html">Level 05</a></li>
                    <li><a href="#">Level 04</a></li>
                    <li><a href="#">Level 03</a></li>
                    <li><a href="#">Level 02</a></li>
                    <li><a href="#">Level 01</a></li>
                </ul>
            </li>

            <li><a href="#">News</a></li>

            <li><a href="{{url('contact-us')}}">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
</header>


        @yield('content')



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School

                    | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a></p>

                <br><br><br>
            </div>
        </div>
    </div>

</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('homepage/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('homepage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('homepage/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('homepage/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('homepage/assets/js/lightbox.js')}}"></script>
<script src="{{asset('homepage/assets/js/tabs.js')}}"></script>
<script src="{{asset('homepage/assets/js/video.js')}}"></script>
<script src="{{asset('homepage/assets/js/slick-slider.js')}}"></script>
<script src="{{asset('homepage/assets/js/custom.js')}}"></script>


<!-- This social media links -->
<!-- Font Awesome -->
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
/>
<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
/>
<!-- MDB -->
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
    rel="stylesheet"
/>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>


</body>
</html>

