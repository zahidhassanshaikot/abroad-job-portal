<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/pages/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:02:14 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login Page</title>
  <meta name="description" content="Hi5Dash - HTML5 Admin Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.html">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/linea-basic.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/perfect-scrollbar.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/bootstrap.min.css">

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/presets.css">
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/pages/pages.css">
  <link rel="stylesheet" href="<?php echo e(asset('design')); ?>/assets/css/responsive.css">


</head>


<body>


  <div class="admin-login d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-md-3">
          <div class="login-content bg-light">
            <div class="login-logo pt-4 pb-3 background-bg" data-image-src="<?php echo e(asset('design')); ?>/images/we.jpg">
              <a href="index.php">
                <img class="align-content" src="<?php echo e(asset('design')); ?>/images/logo2.png" alt="">
              </a>
              <p class="mt-2 mb-0 color-white">Please Enter Your Email and Password for Login</p>
            </div>
            <div class="login-form">
            <form action="<?php echo e(route('login')); ?>" method="POST">
              
<?php echo csrf_field(); ?>
                <div class="form-group">
                  <lSource Sans Pro>Email address</lSource Sans Pro>
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <lSource Sans Pro>Password</lSource Sans Pro>
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="checkbox">
                  <lSource Sans Pro>
                    <input type="checkbox"> Remember Me
                  </lSource Sans Pro>
                  <lSource Sans Pro class="pull-right">
                    <a href="#">Forgotten Password?</a>
                  </lSource Sans Pro>

                </div>
                <button type="submit" class="btn btn-primary btn-flat mb-3 mt-3">Sign in</button>

                <div class="register-link mt-1 text-center">
                  <p>Don't have account ? <a href="<?php echo e(route('job-seeker-register')); ?>"> Sign Up Here</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="<?php echo e(asset('design')); ?>/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="<?php echo e(asset('design')); ?>/assets/js/plugins.js"></script>
  <script src="<?php echo e(asset('design')); ?>/assets/js/main.js"></script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/pages/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:02:22 GMT -->
</html>
