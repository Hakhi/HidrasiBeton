<!DOCTYPE html>
<!-- saved from url=(0053)https://finestdevs.com/demos/shade-preview/index.html -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>eWatery</title>
  <meta name="keywords" content="Perikanan, ewatery, tambak udang, tambak milenial,ewatery.tech">
  <link rel="shortcut icon" href="img/landingPage/ewateryIcon.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons -->
  <link rel="stylesheet" href="/css/landingPage/bootstrap.css">
  <link rel="stylesheet" href="/css/landingPage/style.css">
  <link rel="stylesheet" href="/css/landingPage/typo.css">
  <link rel="stylesheet" href="/css/landingPage/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">

  <link href="/css/landingPage/css2.css" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="/css/landingPage/aos.min.css">
  <link rel="stylesheet" href="/css/landingPage/jquery.fancybox.min.css">
  <link rel="stylesheet" href="/css/landingPage/nice-select.min.css">
  <link rel="stylesheet" href="/css/landingPage/slick.min.css">
  <!-- Vendor stylesheets -->
  <link rel="stylesheet" href="/css/landingPage/main.css">
  <!-- Custom stylesheet -->
  <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/brands.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/solid.css" rel="stylesheet">

</head>

<body data-theme-mode-panel-active="" data-theme="light" style="font-family: 'Mazzard H'';" data-aos-easing="ease"
  data-aos-duration="400" data-aos-delay="0">
  <div class="site-wrapper overflow-hidden position-relative">
    <!--Site Header Area -->
    <header class="site-header site-header--menu-right landing-1-menu site-header--absolute site-header--sticky">
      <div class="container-fluid">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="#">
              <!-- light version logo (logo must be black)-->
              <img src="image/logo/logo-black.png" alt="" class="light-version-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/logo/logo-white.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">×</div>
              </div>
              <ul class="site-menu-main">
                @if (Auth::check())
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">{{ Auth::user()->name }}<i
                      class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-1">
                    <li class="sub-menu--item">
                      <a href="dashboard">Dashboard</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Profile</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Setting</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Call Center</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li>
                      <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item bold">
                          <a class="sub-menu--item">
                            Logout</a>
                        </button>
                      </form>
                    </li>
                  </ul>
                </li>
                @endif
                @if (!Auth::check())
                <li class="nav-item">
                  <div class="header-btn header-btn-l1 mt-4">
                    <a class="btn btn log-in-btn btn-style-02 focus-reset" href="login">
                      Login
                    </a>
                  </div>
                </li>
                @endif
              </ul>
            </nav>
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>

    <!-- navbar- -->

    @yield('landingPage')

    <!-- Footer Area -->
    <footer class="footer-area-l-19">
      <div class="container">
        <div class="row justify-content-center text-center text-lg-start">
          <div class="col-lg-4">
            <div class="footer-copyright">
              <p>© 2022 PKM-KC. All rights reserved</p>
            </div>
          </div>
          <div class="col-lg-5">
            <ul class="list-unstyled d-flex flex-wrap justify-content-center footer-menu-item-l9">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Site map </a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="list-unstyled footer-social-icon-l9 text-lg-end">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Vendor Scripts -->
  <script src="./Saas Service_files/vendor.min.js.download"></script>
  <!-- Plugin's Scripts -->
  <script src="./Saas Service_files/jquery.fancybox.min.js.download"></script>
  <script src="./Saas Service_files/jquery.nice-select.min.js.download"></script>
  <script src="./Saas Service_files/aos.min.js.download"></script>
  <script src="./Saas Service_files/slick.min.js.download"></script>
  <script src="./Saas Service_files/waypoints.min.js.download"></script>
  <script src="./Saas Service_files/jquery.counterup.min.js.download"></script>
  <script src="./Saas Service_files/isotope.pkgd.min.js.download"></script>
  <script src="./Saas Service_files/packery.pkgd.min.js.download"></script>
  <script src="./Saas Service_files/image.loaded.js.download"></script>
  <script src="./Saas Service_files/menu.js.download"></script>
  <!-- Activation Script -->
  <script src="./Saas Service_files/custom.js.download"></script>


</body>

</html>