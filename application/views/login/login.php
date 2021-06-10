<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/argon/img/apple-icon.png"> -->
  <link rel="icon" type="image/png" href="<?= base_url('assets/argon/img/fav.png') ?>">
  <title>
    LOGIN PAGE
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

<body class="login-page">
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
    <div class="container pt-lg-7">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-5">
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="<?= base_url('assets/argon/img/login.png') ?>"></span>
                  <span class="btn-inner--text">LOGIN/SIGN IN</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
              </div>
              <form role="form" action="<?= base_url('login') ?>" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username" value="<?= $data->username ?>">
                  </div>
                </div>
                <div class="form-group focused">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" value="<?= $data->password ?>">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin"><span>Remember me</span></label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
            </div>
            <div class="col-6 text-right">
            </div>
          </div>
        </div>
      </div>
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
      window.TrackJS &&
        TrackJS.install({
          token: "ee6fab19c5a04ac1a32a645abde4613a",
          application: "argon-design-system-pro"
        });
    </script>
    <?php
    $formErrorUsername = form_error('username');
    $formErrorPassword = form_error('password');
    if (!empty($formErrorUsername) || !empty($formErrorPassword)) :
    ?>
      <!-- SCRIPT SWEETALERT INLINE -->
      <script>
        $(window).on('load', function() {
          let pesan = "<?= $formErrorUsername ?> \n <?= $formErrorPassword ?>";
          swal('Oops!', pesan, 'error');
        });
      </script>
    <?php endif; ?>

    <?php
    $pesan = $this->session->flashdata('pesan_error');
    if (!empty($pesan)) :
    ?>
      <!-- SCRIPT SWEETALERT INLINE -->
      <script>
        $(window).on('load', function() {
          let pesan = "<?= $pesan ?>";
          swal('Oops!', pesan, 'error');
        });
      </script>
    <?php endif; ?>
</body>

</html>