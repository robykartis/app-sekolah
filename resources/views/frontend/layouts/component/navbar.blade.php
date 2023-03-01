<header id="header">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand top">
        <div class="container header">

            <!-- Navbar Items [left] -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Open Hours: Mon - Sat -
                        9:00 - 18:00</a>
                </li>
            </ul>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items [right] -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>+1 (305) 1234-5678</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i>hello@example.com</a>
                </li>
            </ul>

            <!-- Navbar Icons -->
            <ul class="navbar-nav icons">
                <li class="nav-item social">
                    <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item social">
                    <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item social">
                    <a href="#" class="nav-link pr-0"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-fixed sub">
        <div class="container header">

            <!-- Navbar Brand-->
            <a class="navbar-brand light" href="/">
                <span class="brand">
                    <span class="featured">
                        <span class="first">APP</span>
                    </span>
                    <span class="last">{{ App\Models\Setting::first()->nama_app }}</span>
                </span>



                {{-- <img src="/logo_app/{{ App\Models\Setting::first()->logo_app }}" height="90px" width="70px"
                    alt="NEXGEN"> --}}

            </a>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                <li class="nav-item">
                    <a href="#" class="nav-link active">HOME </a>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">BLOG </a>
                </li>

            </ul>

            <!-- Navbar Icons -->
            <ul class="navbar-nav icons">
                <li class="nav-item">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth
                                @if (Auth::user()->role == 'super_admin')
                                    <a href="{{ route('super_admin.index') }}"
                                        class="btn btn-sm ml-lg-auto primary-button">Dashboard</a>
                                @elseif(Auth::user()->role == 'admin')
                                    <a href="{{ route('adm_admin.index') }}"
                                        class="btn btn-sm ml-lg-auto primary-button">Dashboard</a>
                                @elseif(Auth::user()->role == 'kepala_sekolah')
                                    <a href="{{ route('kepala_sekolah.index') }}"
                                        class="btn btn-sm ml-lg-auto primary-button">Dashboard</a>
                                @elseif(Auth::user()->role == 'guru_sekolah')
                                    <a href="{{ route('guru_sekolah.index') }}"
                                        class="btn btn-sm ml-lg-auto primary-button">Dashboard</a>
                                @else
                                    <a href="{{ route('murid.index') }}"
                                        class="btn btn-sm ml-lg-auto primary-button">Dashboard</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn btn-sm ml-lg-auto primary-button">Login</a>

                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-sm ml-lg-auto primary-button">Login</a>
                                @endif --}}
                            @endauth
                        </div>
                    @endif
                </li>
            </ul>

            <!-- Navbar Toggle -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar Action -->

        </div>
    </nav>

</header>
