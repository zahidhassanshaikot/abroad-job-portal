<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Candidates Short List</title>


    <?php echo $__env->make('layouts/header/dashboard-header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

    <div class="content-wrapper container-fluid">
      <aside class="left-panel">
        <nav class="navbar">
          <ul class="navbar-nav">
  
            <li class="nav-item dropdown active">
              <a class="nav-link" href="<?php echo e(route('company-dashboard')); ?>">
                 <i class="fa fa-tachometer"></i><span class="menu-title">Dashboard</span>
              </a>
            </li>
  
            </li>
            
  
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('candidates-list',['id'=> $job_post_id ])); ?>">
                <i class="fa fa-product-hunt"></i> <span class="menu-title">Candidate List</span>
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('selected-candidates-list',['id'=> $job_post_id ])); ?>">
                <i class="fa fa-product-hunt"></i> <span class="menu-title">Selected List</span> 
              </a>
            </li>
  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('shortlist-candidates-list',['id'=> $job_post_id ])); ?>">
                <i class="fa fa-list-ul"></i> <span class="menu-title">Short List</span>
              </a>
            </li>
  
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo e(route('pending-candidates-list',['id'=> $job_post_id ])); ?>">
                <i class="fa fa-list-ul"></i> <span class="menu-title">Pending Candidates Lists</span>
              </a>
            </li>
  
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo e(route('eliminated-candidates-list',['id'=> $job_post_id ])); ?>">
                <i class="fa fa-list-ul"></i> <span class="menu-title">Eliminated Candidates List</span>
              </a>
            </li>
  
         
  
          </ul>
        </nav>
      </aside><!-- /.left-panel -->

      







      
    

    <div class="dashboard-contents">
      <div class="contents-inner">

          <?php if(Session::get('message')): ?>
          <div class="alert alert-success" id="message">
              <h4 class=" text-center text-success"> <?php echo e(Session::get('message')); ?></h4>
          </div>
      <?php endif; ?>
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Candidates List</h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>#No</th>
                      <th>Information</th>
                      <th>Picture</th>
                      <th>Address</th>
                      <th>Mobile</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $obj_jobPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                  
                    <tr>
                      <td><?php echo e($item->id); ?></td>
                      <td>
                        <div class="name">
                        <h6>Name:</h6><p><?php echo e($item->fname); ?> <?php echo e($item->lname); ?></p>
                          <h6>Father Name:</h6><p><?php echo e($item->father_name); ?></p>
                        </div>
                      </td>
                      <td>
                        <div class="pro-image">
                        <img src="<?php echo e(asset($item->image)); ?>" height="70px" width="70px" alt="">
                        </div>
                      </td>
                      <td>
                          <div><h6>Present Address</h6>
                            
                            <p><?php echo e($item->present_address); ?></p>
                          </div>
                          <div><h6>Parmanent Address</h6>
                            <p><?php echo e($item->permanent_address); ?></p>
                          </div>
                      </td>
                      <td><?php echo e($item->contact_no); ?></td>
                      <td><?php echo e($item->status); ?></td>
                      <td class="action">
                        <ul>
                          <li><a href="<?php echo e(route('candidate-profile',['id'=>$item->user_id,'job_post_id'=>$job_post_id])); ?>" target="blank" class="profile">View Profile</a></li>
                          <li><a href="<?php echo e(route('select-for-job',['id'=> $job_post_id ])); ?>" class="success">Select for job</a></li>
                          <li><a href="<?php echo e(route('shortlist-for-job',['id'=> $job_post_id ])); ?>" class="success">ShortList for job</a></li>
                          <li><a href="<?php echo e(route('pending-for-job',['id'=> $job_post_id ])); ?>" class="warning">Pending for job</a></li>
                          <li><a href="<?php echo e(route('eliminated-for-job',['id'=> $job_post_id ])); ?>" class="danger">Eliminated for job</a></li>
                          <li><a href="<?php echo e(route('message',['job_post_id'=> $job_post_id,'reciver_id'=> $item->id  ])); ?>" class="message">Send Message</a></li>
                        </ul>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>

                </table>
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->

   
      <?php echo $__env->make('layouts/footer/footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

  <script src="<?php echo e(asset('design')); ?>/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="<?php echo e(asset('design')); ?>/assets/js/plugins.js"></script>
  <script src="<?php echo e(asset('design')); ?>/assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="<?php echo e(asset('design')); ?>/assets/js/tables/dataTables.bootstrap4.min.js"></script>

  <script src="<?php echo e(asset('design')); ?>/assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      "use strict";

      $('.data-table').DataTable();
    });
  </script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:01:56 GMT -->
</html>
