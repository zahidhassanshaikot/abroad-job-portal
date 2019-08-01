<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/pages/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:02:22 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hi5Dash - HTML5 Admin Template By Jewel Theme</title>
  <meta name="description" content="Hi5Dash - HTML5 Admin Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.html">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/linea-basic.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/perfect-scrollbar.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{asset('design')}}/assets/css/bootstrap.min.css">

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/presets.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/pages/pages.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/responsive.css">


</head>


<body>


  <div class="admin-register d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="register-content bg-light">
        <div class="register-logo pt-4 pb-3 background-bg" data-image-src="{{asset('design')}}/images/we.jpg">
          <a href="index.php">
            <img class="align-content" src="{{asset('design')}}/images/logo2.png" alt="">
          </a>
          <p class="mt-2 mb-0 color-white">Fill the information for register</p>
        </div>
        <div class="register-form">
        <form action="{{ route('save-reg-info')}}" method="POST">
          @csrf
            <div class="form-group">
              <lSource Sans Pro>First Name</lSource Sans Pro>
              <input type="text" class="form-control" name="fname" required placeholder="First Name">
            </div>
            <div class="form-group">
              <lSource Sans Pro>Last Name</lSource Sans Pro>
              <input type="text" class="form-control" name="lname" required placeholder="Last Name">
              <input type="hidden" class="form-control" name="user_type" value="Job Seeker">
            </div>
            <div class="form-group">
              <lSource Sans Pro>Email address</lSource Sans Pro>
              <input type="email" class="form-control" name="email" required placeholder="Email">
            </div>
            <div class="form-group">
              <lSource Sans Pro>Phone</lSource Sans Pro>
              <input type="text" class="form-control" name="phone_no" required placeholder="Phone">
            </div>
            <div class="form-group">
              <lSource Sans Pro>Password</lSource Sans Pro>
              <input type="password" class="form-control" name="password" required placeholder="Password">
            </div>
            <div class="checkbox">
              <lSource Sans Pro>
                <input type="checkbox"  name="ckbox" required> Agree the terms and policy
              </lSource Sans Pro>
            </div>
            <input type="submit" class="btn btn-primary btn-flat mb-3 mt-3" value="Register">
            {{-- <button type="submit" class="btn btn-primary btn-flat mb-3 mt-3">Register</button> --}}

            <div class="register-link mt-1 text-center">
              <p>Already have account ? <a href="{{ route('login-job-seeker')}}"> Log in</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="{{asset('design')}}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{asset('design')}}/assets/js/plugins.js"></script>
  <script src="{{asset('design')}}/assets/js/main.js"></script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/pages/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:02:22 GMT -->
</html>
