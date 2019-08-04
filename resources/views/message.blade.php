<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/pages/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:02:14 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Message</title>
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
    @if(Session::get('message'))
    <div class="alert alert-success" id="message">
        <h4 class=" text-center text-success"> {{ Session::get('message') }}</h4>
    </div>
@endif
<section id="message-box">
  <div class="container">
    
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-2"></div>
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="message-box">
        <form class="message-form" action="{{ route('send-message') }}" method="post">
              <h3>Send Your Message</h3>
              @csrf
              <textarea name="message" class="message-tm" rows="8" cols="80"></textarea>
        <input type="hidden" name="job_post_id" class="submit-tm" value="{{ $job_post_id}}">
        <input type="hidden" name="reciver_id" class="submit-tm" value="{{ $reciver_id}}">
              <input type="submit" name="btn" class="submit-tm" value="Submit">
          </form>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2"></div>
    </div>
  </div>
</section>

  <script src="{{asset('design')}}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{asset('design')}}/assets/js/plugins.js"></script>
  <script src="{{asset('design')}}/assets/js/main.js"></script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/pages/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:02:22 GMT -->
</html>
