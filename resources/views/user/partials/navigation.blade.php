<div class="header header-light dark-text">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    <img src="{{ asset('logo.png') }}" class="logo" alt="" style="max-width: 250px" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        @if (auth('peserta')->check())
                            <li>
                                <a href="{{ route('user.logout') }}" class="crs_yuo12">
                                    <span class="embos_45"><i class="fas fa-sign-out-alt"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('peserta.dashboard') }}" class="crs_yuo12">
                                    <span class="embos_45"><i class="fas fa-user"></i></span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('user.login') }}" class="crs_yuo12">
                                    <span class="embos_45"><i class="fas fa-sign-in-alt"></i></span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper d-flex justify-content-between">
                <ul class="nav-menu mx-auto">
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('user.home') }}">Home</a>
                    </li>
                    <li class="{{ request()->is('pelatihan*') ? 'active' : '' }}"><a
                            href="{{ route('user.pelatihan') }}">Pelatihan</a></li>
                    <li class="{{ request()->is('blog*') ? 'active' : '' }}"><a href="{{ route('user.blog') }}">Blog</a>
                    </li>
                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">

                    @if (auth('peserta')->check())
                        <li>
                            <a href="{{ route('user.logout') }}" class="alio_green">
                                <i class="fas fa-sign-out-alt mr-1"></i><span class="dn-lg">Logout</span>
                            </a>
                        </li>
                        <li class="add-listing theme-bg">
                            <a href="{{ route('peserta.dashboard') }}" class="text-white">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('user.login') }}" class="alio_green">
                                <i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Login</span>
                            </a>
                        </li>
                        <li class="add-listing theme-bg">
                            <a href="{{ route('user.register') }}" class="text-white">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
