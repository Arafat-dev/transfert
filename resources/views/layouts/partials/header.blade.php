<!-- header area start -->
<header>
    <div class="header-area ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-area">
                        <a href="{{ url('/') }}">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header-right-section-area">
                        <div class="header-menu f-right">
                            <div class="mobile-menu">
                                <a class="toggle f-right" href="#" role="button" aria-controls="hc-nav-1"><span class="iconify" data-icon="heroicons-outline:menu" data-inline="false"></span></a>
                            </div>
                            <nav id="main-nav">
                                <ul>
                              <li></li>
                              <li></li>
                              <li></li>
                              <li>Header Menu</li>
                                </ul>
                            </nav>
                        </div>

                        <div class="header-login-link f-right">
                            {{-- @if (Auth::check())
                                <a href="#">Deconnnexion</a>
                            @else
                                <a href="{{ route('login') }}">Connexion</a>
                            @endif --}}
                        </div>
                        @if (Auth::check())
                            <div class="user-profile-img f-right">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><img src="https://ui-avatars.com/api/?size=45&background=random&name={{ Auth::User()->nom }}" alt=""></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a href="{{ route('login') }}" class="dropdown-item">Table de board</a></li>
                                    <li><a href="#" class="dropdown-item">Parametre</a></li>
                                    <li><a href="#" class="dropdown-item">Se Deconnecter</a></li>
                                </ul>
                            </div>
                        @else
                        <div class="header-btn f-right">
                            <a href="{{ route('user.register') }}">S'inscrire</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
