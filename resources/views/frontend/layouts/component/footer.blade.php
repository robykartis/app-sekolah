<footer>

    <!-- Footer [content] -->
    <section id="footer" class="odd footer offers">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 footer-left">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="/">
                        <span class="brand">
                            <span class="featured">
                                <span class="first">APP</span>
                            </span>
                            <span class="last">{{ App\Models\Setting::first()->nama_app }}</span>
                        </span>

                        {{-- <img src="/logo_app/{{ App\Models\Setting::first()->logo_app }}" height="128px" width="128px"
                            alt="NEXGEN"> --}}
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-phone-alt mr-2"></i>
                                {{ App\Models\Setting::first()->telpon_app }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-envelope mr-2"></i>
                                {{ App\Models\Setting::first()->email_app }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                {{ App\Models\Setting::first()->alamat_app }}
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Copyright -->
    <section id="copyright" class="p-3 odd copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                    <p>{{ App\Models\Setting::first()->alamat_app }}.</p>
                    <!--
                            Suggestion: Replace the text above with a description of your website.
                         -->
                </div>
                <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                    <p>© {{ App\Models\Setting::first()->nama_app }} is Proudly Powered by <a href="/"
                            target="_blank">Baddau</a>.</p>
                </div>
            </div>
        </div>
    </section>

</footer>
