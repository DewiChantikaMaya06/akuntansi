<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/argon/img/apple-icon.png"> -->
  <link rel="icon" type="image/png" href="assets/argon/img/fav.png">
  <title>
    SISTEM INFORMASI AKUNTANSI
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/argon/css/nucleo-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/argon/css/nucleo-svg.css') ?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?= base_url('assets/argon/css/font-awesome.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/argon/css/nucleo-svg.css') ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= base_url('assets/argon/css/argon-design-system.css?v=1.2.2') ?>" rel="stylesheet" />
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5">
        <img src="<?= base_url('assets/argon/img/is.png') ?>">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <img src="<?= base_url('assets/argon/img/brand/blue.png') ?>">
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="nav-link-inner--text">Components</span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl">
              <div class="dropdown-menu-inner">
                <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="ni ni-spaceship"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">Getting started</h6>
                    <p class="description d-none d-md-inline-block mb-0">Learn how to use compiling Scss, change brand colors and more.</p>
                  </div>
                </a>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-palette"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">Foundation</h6>
                    <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for .</p>
                  </div>
                </a>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="ni ni-ui-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-warning mb-md-1">Components</h5>
                    <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Examples</span>
            </a>
            <div class="dropdown-menu">
              <a href="examples/landing.html" class="dropdown-item">Landing</a>
              <a href="examples/profile.html" class="dropdown-item">Profile</a>
              <a href="examples/login.html" class="dropdown-item">Login</a>
              <a href="examples/register.html" class="dropdown-item">Register</a>
            </div>
          </li>
        </ul> -->
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <!-- <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial/argon-design-system" target="_blank" data-toggle="tooltip" title="Star us on Github">
              <i class="fa fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="btn btn-outline-primary" href="https://www.creative-tim.com/builder/argon" target="_blank">
              <span class="nav-link-inner--text">Online Builder</span>
            </a>
          </li> -->
          <!-- <li class="nav-item d-none d-lg-block">
            <a href="https://www.creative-tim.com/product/argon-design-system-pro?ref=ads-upgrade-pro" target="_blank" class="btn btn-primary btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
              <span class="nav-link-inner--text">LOGIN</span>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- wrapper -->
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="<?= base_url('assets/argon/img/log.png') ?>" style="width: 200px;" class="img-fluid">
                <p class="lead text-white">Sistem Akuntansi dengan fitur lengkap dan terpadu yang memudahkan perekapan pada CV. ITA SOLUSI</p>
                <div class="btn-wrapper mt-5">
                  <!-- <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                    <span class="btn-inner--text">Download HTML</span>
                  </a> -->
                  <a href="<?= site_url('Login/login') ?>" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                    <!-- <span class="btn-inner--icon"><i class="fa fa-github"></i></span> -->
                    <span class="btn-inner--text">LOGIN</span>
                  </a>
                </div>
                <div class="mt-5">
                  <small class="font-weight-bold mb-0 mr-2 text-white">&copy; 2020 proudly Sistem Informasi Akuntansi</small>
                  <!-- <img src="./assets/img/brand/creativetim-white-slim.png" style="height: 28px;"> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
  </div>
  <!-- endwrapper -->
  <!-- <div class="row align-items-center justify-content-md-between">
    <div class="col-md-6">
      <div class="copyright">
        &copy; 2020 <a href="" target="_blank">Sistem Informasi Akuntansi</a>.
      </div>
    </div>
    <div class="col-md-6">
      <ul class="nav nav-footer justify-content-end">
        <!-- <li class="nav-item">
          <a href="" class="nav-link" target="_blank">Creative Tim</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link" target="_blank">About Us</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link" target="_blank">Blog</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link" target="_blank">License</a>
        </li> -->
  </ul>
  </div>
  </div> -->
  </div>
  </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/argon/js/core/jquery.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/argon/js/core/popper.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/argon/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/argon/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url('assets/argon/js/plugins/bootstrap-switch.js') ?>"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url('assets/argon/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/argon/js/plugins/moment.min.js') ?>"></script>
  <script src="<?= base_url('assets/argon/js/plugins/datetimepicker.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/argon/js/plugins/bootstrap-datepicker.min.js') ?>"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?= base_url('assets/argon/js/argon-design-system.min.js?v=1.2.2') ?>" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>