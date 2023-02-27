<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tutorgo - Online Learning and Education HTML Template - shared on themelock.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/assets/img/logo/favicon.png') }}">

    <!-- CSS here  -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/elegent-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/main.css') }}">
    <!-- css end  here-->
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <!-- pre loader area start -->
    <div class="tp-preloader">
        <div class="tp-preloader__center">
            <span>
                <svg width="170" height="132" viewBox="0 0 170 132" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_6_12)">
                        <path
                            d="M113.978 61.1738L55.4552 2.8186C52.8594 0.230266 48.7298 0.230266 46.252 2.8186L1.88784 46.4673C-0.707934 49.0557 -0.707934 53.1735 1.88784 55.6441L14.5127 68.2329L66.9002 120.353L113.86 75.7626C118.108 71.8801 118.108 65.2916 113.978 61.1738Z"
                            fill="black" />
                        <path
                            d="M167.781 51.5263L90.2621 129.059C86.1325 133.177 79.6431 133.177 75.5134 129.059L31.6212 85.2923C35.7509 89.4101 42.2403 89.4101 46.37 85.2923L123.889 7.75996C126.485 5.17163 130.615 5.17163 133.092 7.75996L167.663 42.2319C170.377 44.8202 170.377 48.938 167.781 51.5263Z"
                            fill="#5392FB" />
                        <path
                            d="M74.9235 35.0551C76.6933 36.8199 78.4632 38.467 79.9971 39.8788C82.1209 41.6436 82.2389 44.8202 80.233 46.8203L48.8478 78.1156C44.1282 82.8217 36.4588 82.8217 31.7392 78.1156C27.0197 73.4095 27.0197 65.7622 31.7392 61.0561L63.1245 29.7608C65.1303 27.7607 68.3161 27.8784 70.0859 29.9961C71.5018 31.5256 73.1536 33.2904 74.9235 35.0551Z"
                            fill="currentColor" class="path-yellow" />
                    </g>
                    <defs>
                        <clipPath id="clip0_6_12">
                            <rect width="169.787" height="131.064" fill="white" transform="translate(0 0.936172)" />
                        </clipPath>
                    </defs>
                </svg>

            </span>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <button class="tp-backtotop">
        <span><i class="fal fa-angle-double-up"></i></span>
    </button>
    <!-- back to top end -->


    <!-- header area start -->
    <header>
        <div class="tp-header__area" id="header-sticky">
            <div class="tp-header__main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/frontend/assets/img/logo/logo.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-8 col-6">
                            <div class="tp-header__attach d-flex align-items-center justify-content-end">
                                <div class="tp-header__category d-none d-lg-block mr-20">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="course-grid.html" class="cat-menu d-flex align-items-center">
                                                    <div class="cat-dot-icon d-inline-block">
                                                        <svg viewBox="0 0 276.2 276.2">
                                                            <g>
                                                                <g>
                                                                    <path class="cat-dot"
                                                                        d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z">
                                                                    </path>
                                                                    <path class="cat-dot"
                                                                        d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z">
                                                                    </path>
                                                                    <path class="cat-dot"
                                                                        d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z">
                                                                    </path>
                                                                    <path class="cat-dot"
                                                                        d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z">
                                                                    </path>
                                                                    <path class="cat-dot"
                                                                        d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z">
                                                                    </path>
                                                                    <path class="cat-dot"
                                                                        d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z">
                                                                    </path>
                                                                    <path class="cat-dot"
                                                                        d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    ">
                                                                    </path>
                                                                    <path class="cat-dot"
                                                                        d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z">
                                                                    </path>
                                                                    <path class="cat-dot"
                                                                        d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <span>Categories <i class="fa-light fa-chevron-down"></i></span>
                                                </a>
                                                <ul class="cat-submenu">
                                                    <li><a href="course-details.html">English Learning</a></li>
                                                    <li><a href="course-details.html">Web Development</a></li>
                                                    <li><a href="course-details.html">Logo Design</a></li>
                                                    <li><a href="course-details.html">Motion Graphics</a></li>
                                                    <li><a href="course-details.html">Video Edition</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tp-header__search tp-header__search-2 d-none d-md-block">
                                    <form>
                                        <input type="text" placeholder="Search For Courses">
                                        <button><i class="fal fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="tp-header__hamburger ml-50 d-lg-none">
                                    <button class="hamburger-btn offcanvas-open-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-header__bottom primary-bg d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-8 col-xl-8 col-lg-8 d-none d-lg-block">
                            <div class="main-menu main-menu-2">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="index.html">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home Style 1</a></li>
                                                <li><a href="index-2.html">Home Style 2</a></li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about-us.html">About</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="course.html">Courses</a>
                                            <ul class="submenu">
                                                <li><a href="course-list.html">Courses List</a></li>
                                                <li><a href="course.html">Courses Grid</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="event.html">Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="instructor.html">Instructor V1</a></li>
                                                <li><a href="instructor-2.html">Instructor V2</a></li>
                                                <li><a href="instructor-details.html">Instructor Details</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="sign-in.html">Sign In</a></li>
                                                <li><a href="sign-up.html">Sign Up</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-6">
                            <div class="tp-header__main-right d-flex justify-content-end align-items-center pl-30">
                                <div class="header-acttion-btns d-flex align-items-center d-none d-md-flex">
                                    <a href="sign-up.html" class="tp-hader-btn">Try for free<span class="icon"><i
                                                class="fa-regular fa-arrow-right"></i> </span>
                                    </a>
                                    <a href="sign-in.html">
                                        <span class="avata"><i class="fa-thin fa-user"></i></span>
                                    </a>
                                </div>
                                <div class="tp-header__hamburger ml-50 d-lg-none">
                                    <button class="hamburger-btn offcanvas-open-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->


    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__close text-end">
                    <button class="offcanvas__close-btn offcanvas-close-btn">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="offcanvas__top mb-40">
                    <div class="offcanvas__subtitle">
                        <span class="text-white d-inline-block mb-25 d-none d-lg-block">ELEVATE YOUR BUSINESS
                            WITH</span>
                    </div>
                    <div class="offcanvas__logo mb-40">
                        <a href="index.html">
                            <img src="{{ asset('assets/frontend/assets/img/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="offcanvas-info d-none d-lg-block">
                        <p>Limitless customization options & Elementor compatibility let anyone create a beautiful
                            website
                            with Valiance. </p>
                    </div>
                    <div class="offcanvas__btn d-none d-lg-block">
                        <a href="contact.html" class="tp-btn">Contact us <span></span></a>
                    </div>
                </div>
                <div class="mobile-menu fix mb-40"></div>


                <div class="offcamvas__bottom">
                    <div class="offcanvas__cta mt-30 mb-20">
                        <h3 class="offcanvas__cta-title">Contact info</h3>
                        <span>27 Division St, New York,</span>
                        <span><a href="tel:+1544808">+154 4808 84082 4830</a> </span>
                        <span>support@noxia.com</span>
                        <span>Office Hours: 8AM - 5PM</span>
                        <span>Sunday - Wekend Day</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>

        <!-- slider start  -->
        <div class="tp-slider-2__section p-relative">
            <div class="tp-slilder-active">
                <div class="tp-slider__item tp-slider__height-2 tp-slider__overlay d-flex justify-content-center align-items-center"
                    data-background="assets/img/slider/slider-3.1.jpg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="tp-slider__content text-center">
                                    <span class="tp-slider__subtitle" data-animation="fadeInUp"
                                        data-delay="0.5s">Never stop
                                        learning</span>
                                    <h1 class="tp-slider__title tp-slider__title-sm text-white"
                                        data-animation="fadeInUp" data-delay="0.5s">Start
                                        learning <br> From best platform.
                                    </h1>
                                    <p class="text-white" data-animation="fadeInUp" data-delay="0.7s">Pic from over
                                        100,000
                                        online video courses with additions published
                                        everymonth.</p>
                                    <div class="tp-slider__btn-wrappper p-relative z-index-1"
                                        data-animation="fadeInUp" data-delay="0.9s">
                                        <a href="course.html" class="tp-btn">
                                            <span>View all course<i class="fa-regular fa-arrow-right"></i></span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tp-slider__item  tp-slider__height-2 tp-slider__overlay d-flex justify-content-center align-items-center"
                    data-background="assets/img/slider/slider-3.3.jpg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="tp-slider__content text-center">
                                    <span class="tp-slider__subtitle" data-animation="fadeInUp"
                                        data-delay="0.5s">Never stop
                                        learning</span>
                                    <h1 class="tp-slider__title tp-slider__title-sm text-white"
                                        data-animation="fadeInUp" data-delay="0.5s">Free online courses <br> from the
                                        experts.
                                    </h1>
                                    <p class="text-white" data-animation="fadeInUp" data-delay="0.7s">Pic from over
                                        100,000
                                        online video courses with additions published
                                        everymonth.</p>
                                    <div class="tp-slider__btn-wrappper p-relative z-index-1"
                                        data-animation="fadeInUp" data-delay="0.9s">
                                        <a href="course.html" class="tp-btn">
                                            <span>View all course<i class="fa-regular fa-arrow-right"></i></span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-slider__item tp-slider__height-2 tp-slider__overlay d-flex justify-content-center align-items-center"
                    data-background="assets/img/slider/slider-3.2.jpg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="tp-slider__content text-center">
                                    <span class="tp-slider__subtitle" data-animation="fadeInUp"
                                        data-delay="0.5s">Never stop
                                        learning</span>
                                    <h1 class="tp-slider__title tp-slider__title-sm text-white"
                                        data-animation="fadeInUp" data-delay="0.5s">Grow your career with<br>
                                        Quality education.
                                    </h1>
                                    <p class="text-white" data-animation="fadeInUp" data-delay="0.7s">Pic from over
                                        100,000
                                        online video courses with additions published
                                        everymonth.</p>
                                    <div class="tp-slider__btn-wrappper p-relative z-index-1"
                                        data-animation="fadeInUp" data-delay="0.9s">
                                        <a href="course.html" class="tp-btn">
                                            <span>View all course<i class="fa-regular fa-arrow-right"></i></span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end  -->

        <!-- about section  start -->

        <!-- about section end  -->

        <!-- course start  -->
        <div class="tp-courses-2__section grey-bg pt-120 pb-90">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="tp-section__title-wrapper mb-40">
                            <h3 class="tp-section__title mb-15">Find your online courses <br>
                                Smarter way.</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tp-cta__btn-wrappper d-flex justify-content-lg-end mb-45 p-relative z-index-1">
                            <a href="course.html" class="tp-white-btn">
                                <span>See All course <i class="fa-regular fa-arrow-right"></i></span>
                                <div class="transition"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tp-courses-2__tab-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-courses__item  has-radious  mb-30">
                                <div class="tp-courses__thumb w-img fix p-relative">
                                    <img src="assets/img/courses/courses-1.jpg" alt="">
                                </div>
                                <div class="tp-courses__content white-bg">
                                    <div class="tp-courses__meta">
                                        <span><i class="fa-light fa-book-blank"></i>43 Lesson</span>
                                        <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (100)</span>

                                    </div>
                                    <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete
                                            Design-
                                            Thinking Course</a></h3>
                                    <div class="tp-courses__avata">
                                        <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                                        <span><a href="#">Jennifer Powell</a></span>
                                    </div>
                                    <div class="tp-courses__price d-flex justify-content-between">
                                        <div class="tp-courses__time">
                                            <span><a href="course-details.html" class="more-btn">More Deteils <i
                                                        class="fa-regular fa-arrow-right"></i></a></span>
                                        </div>
                                        <div class="tp-courses__value">
                                            <span>$59.65</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-courses__item has-radious  mb-30">
                                <div class="tp-courses__thumb w-img fix p-relative">
                                    <img src="assets/img/courses/courses-2.jpg" alt="">

                                </div>
                                <div class="tp-courses__content white-bg">
                                    <div class="tp-courses__meta">
                                        <span><i class="fa-light fa-book-blank"></i>41 Lesson</span>
                                        <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (109)</span>

                                    </div>
                                    <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need to
                                            Know
                                            About Business.</a></h3>
                                    <div class="tp-courses__avata">
                                        <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                                        <span><a href="#">Jim Séchen</a></span>
                                    </div>
                                    <div class="tp-courses__price d-flex justify-content-between">
                                        <div class="tp-courses__time">
                                            <span><a href="course-details.html" class="more-btn">More Deteils <i
                                                        class="fa-regular fa-arrow-right"></i></a></span>
                                        </div>
                                        <div class="tp-courses__value">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-courses__item has-radious  mb-30">
                                <div class="tp-courses__thumb w-img fix p-relative">
                                    <img src="assets/img/courses/courses-3.jpg" alt="">
                                </div>
                                <div class="tp-courses__content white-bg">
                                    <div class="tp-courses__meta">
                                        <span><i class="fa-light fa-book-blank"></i>76 Lesson</span>
                                        <span class="tp-ratting"><i class="icon_star_alt"></i> 4.8 (160)</span>

                                    </div>
                                    <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data Scince
                                            and
                                            Business Analysis</a></h3>
                                    <div class="tp-courses__avata">
                                        <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                        <span><a href="#">Ingredia Nutrisha</a></span>
                                    </div>
                                    <div class="tp-courses__price d-flex justify-content-between">
                                        <div class="tp-courses__time">
                                            <span><a href="course-details.html" class="more-btn">More Deteils <i
                                                        class="fa-regular fa-arrow-right"></i></a></span>
                                        </div>
                                        <div class="tp-courses__value">
                                            <span>$59.65</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- course end  -->

        <!-- event start-->
        <div class="tp-event-3__section pt-120 pb-120 p-relative fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-section__title-wrapper text-center mb-60">
                            <h3 class="tp-section__title mb-15">Public events join our <br>
                                Upcoming.</h3>
                            <p>University in the world for satisfaction bender grub bits.</p>
                        </div>
                    </div>
                </div>
                <div class="tp-event-3__wrapper pb-40">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tp-event-3__item mb-30">
                                <div class="tp-event-3__content d-md-flex justify-content-between align-items-center">
                                    <div class="tp-event-3__info">
                                        <span><i class="fa-light fa-clock"></i> July 14, 2022</span>
                                        <span><i class="fa-light fa-location-dot"></i> New York</span>
                                        <h3 class="tp-event-3__title"><a href="event-details.html">Open library talks
                                                -creative
                                                industry development..</a> </h3>
                                    </div>
                                    <div class="tp-evnet-2__btn p-relative z-index-11">
                                        <a href="#" class="tp-border-btn">
                                            <span>Detail</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-event-3__item mb-30">
                                <div class="tp-event-3__content d-md-flex justify-content-between align-items-center">
                                    <div class="tp-event-3__info">
                                        <span><i class="fa-light fa-clock"></i> July 14, 2022</span>
                                        <span><i class="fa-light fa-location-dot"></i> New York</span>
                                        <h3 class="tp-event-3__title"><a href="event-details.html">Performance and
                                                skills in
                                                modern arts.</a> </h3>
                                    </div>
                                    <div class="tp-evnet-2__btn p-relative z-index-11">
                                        <a href="event-details.html" class="tp-border-btn">
                                            <span>Detail</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-event-3__item mb-30">
                                <div class="tp-event-3__content d-md-flex justify-content-between align-items-center">
                                    <div class="tp-event-3__info">
                                        <span><i class="fa-light fa-clock"></i> July 14, 2022</span>
                                        <span><i class="fa-light fa-location-dot"></i> New York</span>
                                        <h3 class="tp-event-3__title"><a href="event-details.html">Online Courses from
                                                University.</a> </h3>
                                    </div>
                                    <div class="tp-evnet-2__btn p-relative z-index-11">
                                        <a href="event-details.html" class="tp-border-btn">
                                            <span>Detail</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-event-3__item mb-30">
                                <div class="tp-event-3__content d-md-flex justify-content-between align-items-center">
                                    <div class="tp-event-3__info">
                                        <span><i class="fa-light fa-clock"></i> July 14, 2022</span>
                                        <span><i class="fa-light fa-location-dot"></i> New York</span>
                                        <h3 class="tp-event-3__title"><a href="event-details.html">World education day
                                                conference</a> </h3>
                                    </div>
                                    <div class="tp-evnet-2__btn p-relative z-index-11">
                                        <a href="event-details.html" class="tp-border-btn">
                                            <span>Detail</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-event-2__btn-wrappper text-center p-relative z-index-1">
                            <a href="event.html" class="tp-btn">
                                <span>View All Event<i class="fa-regular fa-arrow-right"></i></span>
                                <div class="transition"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- evant end -->



    </main>

    <!-- footer area start -->
    <footer>
        <div class="footer__area grey-bg">
            <div class="container">
                <div class="footer__top ">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                            <div class="footer__widget mb-50 footer-col-1">
                                <div class="footer__widget-logo mb-30">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer__widget-content">
                                    <p>Aut cum mollitia reprehenderit.
                                        Eos cumque dicta adipisci amet
                                        architecto culpa.</p>
                                    <div class="footer__social">
                                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                        <span><a href="#" class="yt"><i
                                                    class="fab fa-youtube"></i></a></span>
                                        <span><a href="#" class="tw"><i
                                                    class="fab fa-twitter"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-6">
                            <div class="footer__widget mb-50 footer-col-2">
                                <h3 class="footer__widget-title">Information</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Customer</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Service</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-6">
                            <div class="footer__widget mb-50 footer-col-3">
                                <h3 class="footer__widget-title">Courses</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li><a href="#">Masters Degree</a></li>
                                        <li><a href="#">Post GraduateU</a></li>
                                        <li><a href="#">Ndergraduate</a></li>
                                        <li><a href="#">Engineering</a></li>
                                        <li><a href="#">Ph.D Degree</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6">
                            <div class="footer__widget mb-50 footer-col-4">
                                <h3 class="footer__widget-title">Sign Up for Our Newsletter</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__subscribe">
                                        <p>Receive weekly newsletter with educational,
                                            popular books and much more!</p>
                                        <form action="#">
                                            <div class="footer__subscribe-box has-border-radius">
                                                <div class="footer__subscribe-input has-border-radius">
                                                    <input type="email" placeholder="Email address">
                                                </div>
                                                <button class="footer-sub-btn" type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer__copyright text-center">
                                <p> © 2022 Tutorgo, All Rights Reserved. Design By <a
                                        href="https://themeforest.net/user/theme_pure/portfolio" target="_blank">Theme
                                        Pure</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- JS here -->
    <script src="{{ asset('assets/frontend/assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>
</body>

</html>
