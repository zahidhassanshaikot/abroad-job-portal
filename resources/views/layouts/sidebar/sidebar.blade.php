<div class="content-wrapper container-fluid">
    <aside class="left-panel">
      <nav class="navbar">
        <ul class="navbar-nav">

          <li class="nav-item dropdown active">
            <a class="nav-link" href="{{ route('company-dashboard') }}">
               <i class="fa fa-tachometer"></i><span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('/') }}">
              <i class="fa fa-hashtag"></i> <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('company-profile')}}">
              <i class="fa fa-product-hunt"></i> <span class="menu-title">Company Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employee-and-admin-post-job.php">
              <i class="fa fa-plus-square"></i> <span class="menu-title">Post new job</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="manage-job-list.php">
              <i class="fa fa-list-ul"></i> <span class="menu-title">Manage Jobs</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="index.php" role="button">
              <i class="fa fa-power-off"></i> <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside><!-- /.left-panel -->