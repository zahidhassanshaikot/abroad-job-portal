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
          @if(Auth::user()->hasRole('Employer Seeker'))
          <li class="nav-item">
            <a class="nav-link" href="{{route('company-profile')}}">
              <i class="fa fa-product-hunt"></i> <span class="menu-title">Company Profile</span>
            </a>
          </li>
           
          <li class="nav-item">
            <a class="nav-link" href="{{ route('post-job')}}">
              <i class="fa fa-plus-square"></i> <span class="menu-title">Post new job</span>
            </a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('manage-job-list',['id'=>Auth::user()->id])}}">
              <i class="fa fa-list-ul"></i> <span class="menu-title">Manage Jobs</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->hasRole('Admin'))     
      <li class="nav-item dropdown">
          <a class="nav-link" href="{{ route('company-list')}}">
            <i class="fa fa-list-ul"></i> <span class="menu-title">Company List</span>
          </a>
        </li>
        @endif
        </ul>
      </nav>
    </aside><!-- /.left-panel -->