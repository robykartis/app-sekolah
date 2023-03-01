<!DOCTYPE html>

<html lang="en">

<head>

    <!-- ==============================================
        Basic Page Needs
        =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <title>NEXGEN - Business, Consulting, Finance, Insurance, Startup and Technology</title>

    <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="author" content="Codings">

    <!-- ==============================================
        Favicons
        =============================================== -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/assets/images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/assets/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('assets/frontend/assets/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets/frontend/assets/images/apple-touch-icon-114x114.png') }}">

    <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/vendor/slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/vendor/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/vendor/icons-fa.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/vendor/animation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/vendor/gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/vendor/cookie-notice.min.css') }}">

    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/default.css') }}">

    <!-- ==============================================
        Theme Color
        =============================================== -->
    <meta name="theme-color" content="#21333e">

    <!-- ==============================================
        Theme Settings
        =============================================== -->
    <style>
        :root {
            --header-bg-color: #f9f9f9;
            --nav-item-color: #21333e;
            --hero-bg-color: #f9f9f9;

            --section-1-bg-color: #111117;
            --section-2-bg-color: #eef4ed;
            --section-3-bg-color: #ffffff;
            --section-4-bg-color: #111117;
            --section-5-bg-color: #ffffff;
            --section-6-bg-color: #111117;
            --section-6-bg-image: url('../../assets/images/bg-1.jpg');
        }
    </style>

</head>

<body class="home">

    <!-- Preloader -->
    <div id="preloader" data-timeout="2000" class="odd preloader counter">
        <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
            <div data-percent="100" class="radial">
                <span></span>
            </div>
        </div>
    </div>

    <!-- Header -->
    @include('frontend.layouts.component.navbar')




    @yield('content')




    <!-- Footer -->
    @include('frontend.layouts.component.footer')
    <!-- Modal [search] -->
    <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0">
                                    <h2>What are you looking for?</h2>
                                    <div class="badges">
                                        <span class="badge"><a href="#">Consulting</a></span>
                                        <span class="badge"><a href="#">Audit</a></span>
                                        <span class="badge"><a href="#">Assurance</a></span>
                                        <span class="badge"><a href="#">Advisory</a></span>
                                        <span class="badge"><a href="#">Financial</a></span>
                                        <span class="badge"><a href="#">Capital Markets</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [sign] -->
    <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body">
                    <form action="/" class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0 pb-3">
                                    <h2>Sign In</h2>
                                    <p>Don't have an account? <a href="#" class="primary-color"
                                            data-toggle="modal" data-target="#register">Register now</a>.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">SIGN IN</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [register] -->
    <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body">
                    <form action="/" class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0 pb-3">
                                    <h2>Register</h2>
                                    <p>Have an account? <a href="#" class="primary-color" data-toggle="modal"
                                            data-target="#sign">Sign In</a>.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">REGISTER</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [map] -->
    <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header absolute" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.123073808986!2d12.490042215441486!3d41.89021017922119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColiseu!5e0!3m2!1spt-BR!2sbr!4v1594148229878!5m2!1spt-BR!2sbr"
                        width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [responsive menu] -->
    <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                        <div class="contacts p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll [to top] -->
    <div id="scroll-to-top" class="scroll-to-top">
        <a href="#header" class="smooth-anchor">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>

    <!-- ==============================================
        Google reCAPTCHA // Put your site key here
        =============================================== -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

    <!-- ==============================================
        Vendor Scripts
        =============================================== -->
    <script src="{{ asset('assets/frontend/assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/ponyfill.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/slider.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/animation.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/progress-radial.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/bricklayer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/gallery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/cookie-notice.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/particles.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>

</body>

</html>
