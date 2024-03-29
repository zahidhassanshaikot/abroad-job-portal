<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Job Seeker Profile</title>

  @include('layouts/header/dashboard-header')
  {{-- @include('layouts/sidebar/admin-sidebar2') --}}


<div class="content-wrapper container-fluid">
  <aside class="left-panel">
    <nav class="navbar">
      <ul class="navbar-nav">

        <li class="nav-item dropdown active">
          <a class="nav-link" href="{{ route('company-dashboard') }}">
             <i class="fa fa-tachometer"></i><span class="menu-title">Dashboard</span>
          </a>
        </li>

        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="total-job.php">
            <i class="fa fa-hashtag"></i> <span class="menu-title">Total Jobs</span>
          </a>
        </li> --}}

        <li class="nav-item">
          <a class="nav-link" href="{{ route('candidates-list',['id'=> $job_post_id ]) }}">
            <i class="fa fa-product-hunt"></i> <span class="menu-title">Candidate List</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('selected-candidates-list',['id'=> $job_post_id ]) }}">
            <i class="fa fa-product-hunt"></i> <span class="menu-title">Selected List</span> 
          </a>
        </li>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('shortlist-candidates-list',['id'=> $job_post_id ]) }}">
            <i class="fa fa-list-ul"></i> <span class="menu-title">Short List</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="{{ route('pending-candidates-list',['id'=> $job_post_id ]) }}">
            <i class="fa fa-list-ul"></i> <span class="menu-title">Pending Candidates Lists</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="{{ route('eliminated-candidates-list',['id'=> $job_post_id ]) }}">
            <i class="fa fa-list-ul"></i> <span class="menu-title">Eliminated Candidates List</span>
          </a>
        </li>

     

      </ul>
    </nav>
  </aside><!-- /.left-panel -->

  






    <div class="dashboard-contents">
        <div class="contents-inner">
          <div class="row">
  
            <div class="col-md-12">
              <div class="section-content profile-dashboard">
                <div class="content-head">
                  <div class="profile-image">
                    <img src="{{asset($seeker_profile->image)}}" alt="profile">
                    <span><a href="#">Change Profile</a></span>
                  </div>
                  <div class="profile-info">
                  <h2 class="name">{{ $seeker_profile->fname}} {{ $seeker_profile->lname}}</h2>
                    <h5 class="email">{{ $seeker_profile->email}}</h5>
                  </div>
                </div>
  
                <div class="content-details show">
                  <div class="card">
                    <div class="card-body card-block">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="applier-info">
                            <div class="info-title">
                              <h4 class="">My Data</h4>
                            </div>
                            <table class="table table-striped">
                              <tbody>
                                <tr>
                                  <td>Email Address</td>
                                  <td>{{ $seeker_profile->email}}</td>
                                </tr>
                                <tr>
                                  <td>Fisrt Name</td>
                                  <td>{{ $seeker_profile->fname}}</td>
                                </tr>
                                <tr>
                                  <td>Last Name</td>
                                  <td>{{ $seeker_profile->lname}}</td>
                                </tr>
                                <tr>
                                  <td>Phone</td>
                                  <td>{{ $seeker_profile->contact_no}}</td>
                                </tr>
                                <tr>
                                  <td>Nationality</td>
                                  <td>{{ $seeker_profile->nationality}}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
  
               
  
                      </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.content-details -->
              </div>
            </div>
  
          </div>
        </div><!-- /.contents-inner -->
  
        @include('layouts/footer/footer')
  
  
  
        <script src="{{asset('design')}}/assets/js/jquery-3.2.1.slim.min.js"></script>
        <script src="{{asset('design')}}/assets/js/plugins.js"></script>
        <script src="{{asset('design')}}/assets/js/forms/chosen.jquery.min.js"></script>
        <script src="{{asset('design')}}/assets/js/main.js"></script>
      
  
    <script>
      jQuery(document).ready(function() {
        "use strict";
  
        jQuery(".standardSelect").chosen({
          disable_search_threshold: 10,
          no_results_text: "Oops, nothing found!",
          width: "100%"
        });
      });
    </script>
  
  
  </body>
  
  <!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/forms/advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:02:04 GMT -->
  </html>