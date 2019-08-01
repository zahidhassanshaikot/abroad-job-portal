<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Police Box</title>
    <link rel="stylesheet" href="<?php echo e(asset('back-end')); ?>/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('back-end')); ?>/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('back-end')); ?>/css/style.css">

</head>
<body>

  <!-- Navber start---->
  <header>
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="<?php echo e(route('/')); ?>">Bangladesh Police</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link " href="<?php echo e(route('/')); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Apply
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('GD_application_page')); ?>">Apply for GD</a>
              <a class="dropdown-item" href="<?php echo e(route('Clearance_page')); ?>">Apply for Clearance</a>
            </div>
          </li>
             <?php if(auth()->guard()->check()): ?>
           <?php if(Auth::user()->hasRole('Admin')): ?> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Vehicle
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('add-vehicle')); ?>">Add Vehicles</a>
              <a class="dropdown-item" href="<?php echo e(route('search-vehicle')); ?>">Search Vehicles</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              List
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('GD_application_list')); ?>">GD Application List</a>
              <a class="dropdown-item" href="<?php echo e(route('clearance_list')); ?>">Clearance Application List</a>
              <a class="dropdown-item" href="<?php echo e(route('vehicle_list')); ?>">Vehicle List</a>
              <a class="dropdown-item" href="<?php echo e(route('news_list')); ?>">News List</a>
            </div>
          </li>
                 <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('add-news')); ?>">
              Add News
            </a>
          </li>
 
        <?php endif; ?>
            <?php endif; ?> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('news')); ?>">
              News
            </a>
          </li>

        <?php if(auth()->guard()->guest()): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('user-login')); ?>">
              Login
            </a>
          </li>
          <?php endif; ?>
            
          <?php if(auth()->guard()->check()): ?>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('user-profile')); ?>">Profile </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
         <?php echo csrf_field(); ?>
         </form>
          </li>
        <?php endif; ?>

        </ul>
      </div>
    </nav>
  </header>
  <!--Navber end---->

  <!--Banner part---->
  <?php echo $__env->yieldContent('content'); ?>

  
  <!-- Footer -->
  <footer class="page-footer font-small blue">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      © 2019 Copyright:
      <a href="<?php echo e(route('/')); ?>"> policebox.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <script src="<?php echo e(asset('back-end')); ?>/js/font-awesome.js"></script>
    <script src="<?php echo e(asset('back-end')); ?>/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo e(asset('back-end')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('back-end')); ?>/js/custom.js"></script>

</body>
</html>
