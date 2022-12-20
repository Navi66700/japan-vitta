<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - Japan Vitta</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('homepage/assets/images/jp-logo.png')}}" rel="icon">
    <link href="{{asset('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{asset('homepage/assets/images/jp-logo.png')}}" alt="">
            <span class="d-none d-lg-block">Japan Vitta</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->


            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{asset('backend/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ 'dashboard-cards' == request()->path() ? 'active' : 'collapsed'}}" href="{{url('dashboard-cards')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Masters</li>

        <li class="nav-item">
            <a class="nav-link {{ 'lesson' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('lesson')}}">
                <i class="bi bi-book"></i>
                <span>Lessons</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'past-papers' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('past-papers')}}">
                <i class="bi bi-card-checklist"></i>
                <span>Past Papers</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed"{{ 'view-contact' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('view-contact')}}">
                <i class="bi bi-envelope"></i>
                <span>Contacts</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>News</span>
            </a>
        </li><!-- End Register Page Nav -->

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-login.html">--}}
{{--                <i class="bi bi-box-arrow-in-right"></i>--}}
{{--                <span>Login</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <!-- End Login Page Nav -->

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-error-404.html">--}}
{{--                <i class="bi bi-dash-circle"></i>--}}
{{--                <span>Error 404</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <!-- End Error 404 Page Nav -->

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-blank.html">--}}
{{--                <i class="bi bi-file-earmark"></i>--}}
{{--                <span>Blank</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
    @yield('content')
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer class="footer">
    <div class=" container-fluid ">
        <div class="copyright" id="copyright">
            &copy; <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script> &nbsp<a href="https://www.storehub.lk" target="_blank">Japan Vitta</a> | Powered by <a href="https://www.cervustechnologies.com" target="_blank">Cervus Technologies</a>.
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('backend/assets/js/main.js')}}"></script>

</body>

</html>
