@extends('frontend.layouts.master')
@section('content')
    <!-- Services -->
    <section id="services" class="section-2 offers">
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                    <span class="pre-title m-auto ml-md-0">Our business areas</span>
                    <h2>Excellence in <span class="featured"><span>Services</span></span></h2>
                    <p>We are leaders in providing consultancy services with a set of cutting-edge technologies and a
                        team of experienced and renowned professionals. These are some options that you can hire.</p>
                </div>
                <div class="col-12 col-md-3 align-self-end">
                    <a href="#" class="btn mx-auto mr-md-0 ml-md-auto primary-button">SEE ALL</a>
                </div>
            </div>
            <div class="row justify-content-center items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-organization"></i>
                        <h4>Audit & Assurance</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-briefcase"></i>
                        <h4>Financial Advisory</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-chart"></i>
                        <h4>Analytics and M&A</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-plane"></i>
                        <h4>Middle Marketing</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-globe-alt"></i>
                        <h4>Legal Consulting</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-drawer"></i>
                        <h4>Regulatory Risk</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        <a href="page-single-service-1.html"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section id="process" class="section-3 process offers">
        <div class="container full">
            <div class="row text-center intro">
                <div class="col-12">
                    <span class="pre-title">How it works in practice</span>
                    <h2><span class="featured"><span>Process</span></span> Management</h2>
                    <p class="text-max-800">We work with innovative methodologies to ensure that the entire
                        reformatting process is done from start to finish as planned.</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-2 item">
                    <div class="step"><span>01</span></div>
                    <h4>Collection of information</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-2 item">
                    <div class="step"><span>02</span></div>
                    <h4>Strategic planning</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-2 item">
                    <div class="step"><span>03</span></div>
                    <h4>Assignment of responsibilities</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-2 item">
                    <div class="step"><span>04</span></div>
                    <h4>Formatting process</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-2 item">
                    <div class="step"><span>05</span></div>
                    <h4>Continuity formalization</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="team" class="section-4 odd highlights team image-right">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 align-self-top text-center text-md-left text">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-auto m-md-0">We like what we do</span>
                            <h2><span class="featured"><span>Team</span></span> of Experts</h2>
                            <p>Ethics and integrity are the bases on which our professionals build their
                                careers.<br>They are fundamentals that become daily attitudes.</p>
                        </div>
                    </div>
                    <div class="row items text-left">
                        <div class="col-12 col-md-6 p-0">
                            <div class="row item">
                                <div class="col-4 p-0 pr-3 align-self-center">
                                    <img src="{{ asset('assets/frontend/assets/images/team-1.jpg') }}" alt="Person"
                                        class="person">
                                </div>
                                <div class="col-8 align-self-center text-left">
                                    <h4>David Cooper</h4>
                                    <p>CTO & CO-FOUNDER</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-4 p-0 pr-3 align-self-center">
                                    <img src="{{ asset('assets/frontend/assets/images/team-1.jpg') }}" alt="Person"
                                        class="person">
                                </div>
                                <div class="col-8 align-self-center text-left">
                                    <h4>Emma Lopez</h4>
                                    <p>CHIEF MARKETING</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 p-0">
                            <div class="row item">
                                <div class="col-4 p-0 pr-3 align-self-center">
                                    <img src="{{ asset('assets/frontend/assets/images/team-1.jpg') }}" alt="Person"
                                        class="person">
                                </div>
                                <div class="col-8 align-self-center text-left">
                                    <h4>Oliver Jones</h4>
                                    <p>CHIEF PROCUREMENT</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-4 p-0 pr-3 align-self-center">
                                    <img src="{{ asset('assets/frontend/assets/images/team-1.jpg') }}" alt="Person"
                                        class="person">
                                </div>
                                <div class="col-8 align-self-center text-left">
                                    <h4>T. Johnson</h4>
                                    <p>CEO & PRESIDENT</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-12 col-lg-4 align-self-end">
                    <div class="quote">
                        <div class="quote-content">
                            <h4>President Speech</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut lacinia diam.</p>
                            <p>Vivamus efficitur et est quis posuere. Nulla sollicitudin vulputate dui, id pretium
                                tortor congue eu. Integer aliquet justo eu quam volutpat ullamcorper.</p>
                            <p>Duis ut hendrerit mauris. Phasellus faucibus ut enim vel tincidunt. Nunc venenatis a dui
                                et laoreet.</p>
                            <h5>T. Johnson</h5>
                        </div>
                        <i class="quote-right fas fa-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="section-5 carousel showcase">
        <div class="overflow-holder">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <span class="pre-title m-auto m-md-0">Our editorial content</span>
                        <h2>Latest <span class="featured"><span>News</span></span></h2>
                        <p>Every week we publish content about what is best in the business world.</p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="#" class="btn mx-auto mr-md-0 ml-md-auto primary-button">SEE ALL</a>
                    </div>
                </div>
                <div class="swiper-container mid-slider items" data-perview="3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i
                                            class="icon-user"></i>Andrea Miller</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>Increasing creativity is possible for everyone</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John
                                        Smith</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>Because market research is part of the business plan</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i
                                            class="icon-user"></i>Andrea Miller</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>16
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>Working from home is now a trend</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John
                                        Smith</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>23
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>Tips for having a good relationship at work</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>David
                                        Cooper</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>30
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>David Cooper tells about the opening of the new office in Baltimore</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i
                                            class="icon-user"></i>Andrea Miller</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>Increasing creativity is possible for everyone</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John
                                        Smith</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>Because market research is part of the business plan</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i
                                            class="icon-user"></i>Andrea Miller</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>16
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>Working from home is now a trend</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John
                                        Smith</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>23
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>Tips for having a good relationship at work</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="{{ asset('assets/frontend/assets/images/news-1.jpg') }}" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>David
                                        Cooper</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>30
                                        Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="page-single-post-1.html">
                                            <h4>David Cooper tells about the opening of the new office in Baltimore</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
