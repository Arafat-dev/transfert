
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>My Single Pay</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/offcanvas-navbar/">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


     <!-- css -->

    <link rel="icon" href="{{ asset('uploads/favicon.ico?v=1') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/hc-offcanvas-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    @stack('css')



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bg-blue{
        background-color: rgb(26, 114, 121);
        color: white;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .h-200{
        height: 76px;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
  </head>
  <body class="bg-light">

<nav class="navbar navbar-expand-lg fixed-top  bg-blue h-200" aria-label="Main navigation">
  <div class="container-fluid ">
    <a class="navbar-brand text-white" href="#"><img src="{{ asset('image/logo2.png')}}"  width="80px" height="80px"  alt="My single pay"></a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white " aria-current="page" href="/">Accueil</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{ route('dashboard') }}">Tableau de bord</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link text-white" href="/#service">Services</a>
          </li>
        <li class="nav-item active">
            <a class="nav-link text-white" href="{{ route('login') }}">Connexion</a>
        </li>

        <li class="nav-item active">
            <a class="nav-link text-white" href="{{ route('propos')}}">A propos</a>
        </li>

        <li class="nav-item active">
            <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
        </li>

      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-white" type="submit">Search</button>
      </form>
       -->

@Auth
       <div class="dropdown mx-2 px-5">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

      <i class='fa fa-user-circle shadow-md' style='font-size:38px; color:white'></i>
       <strong class="px-2">{{ Auth::user()->name}}</strong>
      </a>

      <ul class="dropdown-menu dropdown-menu-white text-small shadow" aria-labelledby="dropdownUser1">

        <li><a class="dropdown-item" href="#"><i class="fa fa-gear px-3" style="font-size:24px"></i>Settings</a></li>
        <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user px-3" style="font-size:24px"></i>Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item href="{{route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">

                              <i class="fa fa-sign-out  px-3" style="font-size:24px"></i> Logout
                            </a>
            </form>
        </li>
      </ul>
    </div>




@endAuth

    </div>
  </div>
</nav>



<main class="container">

     @yield("contenu")

</main>


    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

      <script src="{{ asset('js/offcanvas.js') }}"></script>


      <script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/iconify.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/hc-offcanvas-nav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    {{-- @if(Auth::check())
    <script src="{{ asset('backend/admin/assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('backend/admin/assets/js/form.js') }}"></script>
    @endif
    <!-- Page Specific JS File -->
    @stack('js') --}}




    @include('layouts.partials.footer')
  </body>
</html>
