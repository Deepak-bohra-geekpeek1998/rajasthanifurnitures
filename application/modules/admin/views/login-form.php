<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rajasthani Furnitures Admin</title>
  <link rel="icon" href="<?php echo base_url() ?>assets/public/img/logo/logo.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img src><a href="<?php echo base_url() ?>assets/admin/index2.html" class="h2"><b>Rajasthani Furnitures</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form id="signin" method="post" action="<?php echo base_url() ?>signin">
          <!-- <form id="signin" method="post" action=""> -->

          <div id="forgot">
            <?php
            if (!empty($_SESSION['message1'])) {
              ?>
              <div class="alert alert-success inverse alert-dismissible fade show" role="alert"><i
                  class="icon-thumb-up"></i>

                <?php echo $_SESSION['message1'] ?>
              </div>
              <?php
            }
            ?>

          </div>
          <script>
            setTimeout(function () {
              $('#forgot').hide('slow');
            }, 4000);
          </script>


          <div id="log_in">
            <?php
            if (!empty($_SESSION['login_error_message'])) {
              ?>
              <div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><i
                  class="icon-thumb-up"></i>

                <?php echo $_SESSION['login_error_message'] ?>
              </div>
              <?php
            }
            ?>
          </div>
          <script>
            setTimeout(function () {
              $('#log_in').hide('slow');
            }, 4000);
          </script>

          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
              </p>
            </div>
            <div class="col-12">
              <div class="social-auth-links text-center mt-2 mb-3">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <div class="social-auth-links text-center mt-2 mb-3"> -->
        <!-- <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a> -->
        <!-- <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a> -->
        <!-- </div> -->
        <!-- /.social-auth-links -->


        <!-- <p class="mb-0">
          <a href="register.html"  class="text-center">Register a new membership</a>
        </p> -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function () {
      $('.toggle-password').click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr('toggle'));
        if (input.attr('type') == 'password') {
          input.attr('type', 'text');
        } else {
          input.attr('type', 'password');
        }
      });
    });
  </script>
</body>

</html>