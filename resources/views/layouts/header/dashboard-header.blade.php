
  <meta name="description" content="Hi5Dash - HTML5 Admin Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.html">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/linea-basic.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/pe-icon-7-stroke.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/perfect-scrollbar.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{asset('design')}}/assets/css/bootstrap.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/responsive.css">
  <link rel="stylesheet" href="{{asset('design')}}/assets/css/index-01.css">


</head>


<body class="index-01">
  <header class="top-header media">
    <div class="top-left mr-3">
      <a class="navbar-brand" href="index.php"><img src="{{asset('design')}}/images/logo.png" alt="Site Logo"></a><!-- /.navbar-brand -->
    </div><!-- /.top-left -->

    <div class="top-right media-body">
      <div class="left-content float-left">
        <a href="#" class="sidenav-toggle mr-2" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars"></i>
        </a><!-- /.sidenav-toggle -->

        <form class="search-form" action="#">
          <input type="text" class="form-control" id="search1" placeholder="Search ...">
          <input type="submit" class="form-control" id="submit1">
        </form><!-- /.search-form -->
      </div><!-- /.left-content -->

      <div class="right-content float-right">

        <div class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <i class="fa fa-envelope-o"></i>
            <span class="count">5</span>
          </a>

          <ul class="dropdown-menu">
            <li class="header">You have 5 messages</li>
            <li>
              <div class="slimScrollDiv">
                <ul class="dropdown-content">
                  <li>
                    <a href="#" class="media">
                      <img src="images/avatar/1.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Jacob Stewart</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> 15 mins</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#" class="media">
                      <img src="images/avatar/3.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Alan Perez</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> Today</span>
                        <p>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="media">
                      <img src="images/avatar/4.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Jason Johnson</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> Yesterday</span>
                        <p>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="footer"><a href="#">See all Messages</a></li>
          </ul><!-- /.dropdown-menu -->
        </div><!-- /.dropdown -->

        <div class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="count">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 notifications</li>
            <li>
              <ul class="dropdown-content">
                <li>
                  <a href="#">
                    <i class="fa fa-users alert-primary"></i> Curabitur id eros quis nunc suscipit blandit.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning alert-secondary"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart alert-success"></i> In gravida mauris et nisi
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user alert-danger"></i> Praesent eu lacus in libero dictum fermentum.
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul><!-- /.dropdown-menu -->
        </div><!-- /.dropdown -->

        <div class="dropdown user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('design')}}/images/avatar/1.jpg" class="rounded-circle float-left mr-2" alt="User Image">
            <span class="status"></span>
            <h4 class="name">Jonathon Doe</h4>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
            <li><a href="#"><i class="fa fa-gears"></i> Account Setting</a></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>

      </div><!-- /.right-content -->
    </div><!-- /.top-right -->
  </header><!-- /.top-header -->
