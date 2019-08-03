<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Job Seeker Profile</title>



    <?php echo $__env->make('layouts/header/dashboard-header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('layouts/sidebar/job-seeker-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">

          <div class="col-md-12">
            <div class="section-content profile-dashboard">
              <div class="content-head">
                <div class="profile-image">
                  <img src="<?php echo e(asset($seeker_profile->image)); ?>" alt="profile">
                  <span><a href="#">Change Profile</a></span>
                </div>
                <div class="profile-info">
                <h2 class="name"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></h2>
                  <h5 class="email"><?php echo e(Auth::user()->email); ?></h5>
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
                                <td><?php echo e(Auth::user()->email); ?></td>
                              </tr>
                              <tr>
                                <td>Fisrt Name</td>
                                <td><?php echo e(Auth::user()->fname); ?></td>
                              </tr>
                              <tr>
                                <td>Last Name</td>
                                <td><?php echo e(Auth::user()->lname); ?></td>
                              </tr>
                              <tr>
                                <td>Phone</td>
                                <td><?php echo e($seeker_profile->contact_no); ?></td>
                              </tr>
                              <tr>
                                <td>Nationality</td>
                                <td><?php echo e($seeker_profile->nationality); ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      <div class="my-application">
                        <div class="info-title">
                          <h4>My Applications</h4>
                        </div>
                        <div class="apply-info">
                          <p>You don,t have applied for any jobs</p>
                        </div>
                      </div>

                      <div class="save-job">
                        <div class="info-title">
                          <h4>My Saved Job</h4>
                        </div>
                        <div class="save-jobs-info">
                          <ul>
                            <li><a href="#">German B2B Customer Service Representative</a> </li>
                            <li><a href="#">Commercial Officer</a> </li>
                          </ul>
                        </div>
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

      <?php echo $__env->make('layouts/footer/footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>



      <script src="<?php echo e(asset('design')); ?>/assets/js/jquery-3.2.1.slim.min.js"></script>
      <script src="<?php echo e(asset('design')); ?>/assets/js/plugins.js"></script>
      <script src="<?php echo e(asset('design')); ?>/assets/js/forms/chosen.jquery.min.js"></script>
      <script src="<?php echo e(asset('design')); ?>/assets/js/main.js"></script>
    

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