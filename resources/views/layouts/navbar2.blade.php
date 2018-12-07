<header class="header header-fixed header-transparent text-white sticky" style="
    box-shadow: 0px 1px 26px rgba(17,17,17,0.4);
">
            <div class="container-fluid">

                <!-- ====== Start of Navbar ====== -->
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="{{ route('/') }}">
                        <!-- INSERT YOUR LOGO HERE -->
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="150" class="logo">
                        <!-- INSERT YOUR WHITE LOGO HERE -->
                        <img src="{{ asset('assets/images/logo-white.png') }}" alt="white logo" width="150" class="logo-white">
                    </a>

                    <button id="mobile-nav-toggler" class="hamburger hamburger--collapse" type="button">
                       <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                       </span>
                    </button>

                    <!-- ====== Start of #main-nav ====== -->
                    <div class="navbar-collapse" id="main-nav">

                        <!-- ====== Start of Main Menu ====== -->
                        <ul class="navbar-nav mx-auto" id="main-menu">
                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('/') }}">Home</a>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('movies') }}">Movies</a>

                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('blog') }}">Blog</a>

                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" target="_BLANK" href="https://www.imdb.com/search/title?groups=top_250&sort=user_rating">Top 250</a>
                            </li>

                        </ul>
                        <!-- ====== End of Main Menu ====== -->


                        <!-- ====== Start of Extra Nav ====== -->
                        <ul class="navbar-nav extra-nav">

                            <!-- Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link toggle-search" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                            <!-- Menu Item -->
                            @guest
                                <li class="nav-item m-auto">
                                    <a href="{{ route('register') }}" class="btn btn-main btn-effect ">
                                        <i class="icon-user"></i> Register
                                    </a> 
                                    <a href="{{ route('login') }}" class="btn">
                                        <i class="icon-user"></i> log in
                                    </a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @if (Auth::user()->is_admin == 1) 
                                        <a class="dropdown-item" href="{{ route('admin') }}">Admin Dashboard</a>
                                        @endif
                                        <a class="dropdown-item" href="{{ route('account') }}">Acount</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        <!-- ====== End of Extra Nav ====== -->

                    </div>
                    <!-- ====== End of #main-nav ====== -->
                </nav>
                <!-- ====== End of Navbar ====== -->

            </div>
        </header>