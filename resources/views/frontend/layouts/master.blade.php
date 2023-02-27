<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sarsa - News & Magazine HTML Template</title>
    <meta name="description" content="Sarsa - News & Magazine HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/assets/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/imageRevealHover.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/main.css') }}">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('frontend.layouts.component.navbar')
    <!-- header-area-end -->


    <!-- main-area -->
    <main>

        @yield('content')

    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    @include('frontend.layouts.component.footer')
    <!-- footer-area-end -->



    <!-- JS here -->
    <script src="{{ asset('assets/frontend/assets/js/vendor/jquery-3.6.0.min.j') }}s"></script>
    <script src="{{ asset('assets/frontend/assets/js/bootstrap.min.j') }}s"></script>
    <script src="{{ asset('assets/frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/imageRevealHover.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>
</body>

</html>
