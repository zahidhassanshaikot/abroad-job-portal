<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Company Profile</title>


  <?php echo $__env->make('layouts/header/dashboard-header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layouts/sidebar/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">

          <div class="col-md-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Company Profile</h4>
              </div>

              <div class="content-details show">
                <div class="card">

                <?php if(Session::get('message')): ?>
                    <div class="alert alert-success" id="message">
                        <h4 class=" text-center text-success"> <?php echo e(Session::get('message')); ?></h4>
                    </div>
                <?php endif; ?>
                <div class=" card card-default">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                  <div class="card-body card-block">
                  <form action="<?php echo e(route('save-company-profile-info')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Company Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" name="company_name" <?php if(!empty($obj_company)): ?> value="<?php echo e($obj_company->company_name); ?>" <?php endif; ?> required="" placeholder="Company Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Display Name</label>
                          <div class="input-group">
                            <input class="form-control" name="display_name" type="text" <?php if(!empty($obj_company)): ?> value="<?php echo e($obj_company->display_name); ?>" <?php endif; ?> placeholder="Display Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Company Type</label>
                          <select class="form-control valid" id="companyType"  name="company_type" aria-invalid="false">
                            <option value="">Select Type</option>
                            <option value="Local" <?php if(!empty($obj_company)): ?> <?php if($obj_company->company_type=='Local'): ?> selected="selected" <?php endif; ?> <?php endif; ?> >Local</option>
                            <option value="Foreign" <?php if(!empty($obj_company)): ?> <?php if($obj_company->company_type=='Foreign'): ?> selected="selected" <?php endif; ?> <?php endif; ?>>Foreign</option>
                            <option value="Multinational" <?php if(!empty($obj_company)): ?> <?php if($obj_company->company_type=='Multinational'): ?> selected="selected" <?php endif; ?> <?php endif; ?>>Multinational</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Organization Type <span>*</span></label>
                          <select class="form-control" id="fkOrganizationType" name="organization_type" required="">
                            <option value="">Select Organization Types</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->organization_type=='Private'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Private">Private</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->organization_type=='Government'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Government">Government</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->organization_type=='Semi-Government'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Semi-Government">Semi-Government</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->organization_type=='NGO'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="NGO">NGO</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->organization_type=='Institutes'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Institutes">Institutes</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Industry Type</label>
                          <select class="form-control valid" id="IndustryType" name="industry_type" aria-invalid="false">
                            <option value="">Select Industry Type</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Accounting/Auditing'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Accounting/Auditing">Accounting/Auditing</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Administration'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Administration">Administration</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Advertising'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Advertising">Advertising</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Aerospace and Defense'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Aerospace and Defense">Aerospace and Defense</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Agriculture/Forestry/Fishing'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Agriculture/Forestry/Fishing">Agriculture/Forestry/Fishing</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Airlines/Aviation'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Airlines/Aviation">Airlines/Aviation</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Architecture'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Architecture">Architecture</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Arts/Entertainment/and Media'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Arts/Entertainment/and Media">Arts/Entertainment/and Media</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Software'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Software">Software</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Aviation/Marine Refueling'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Aviation/Marine Refueling">Aviation/Marine Refueling</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Banking'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Banking">Banking</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Biotechnology'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Biotechnology">Biotechnology</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->industry_type=='Others'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Address</label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($obj_company)): ?> value="<?php echo e($obj_company->address); ?>" <?php endif; ?> required name="address" type="text" placeholder="Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Districts <span>*</span></label>
                          <select class="form-control" id="fkDistrict" name="districts"  required="">
                            <option value="">Select District</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->districts=='Dhaka'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Dhaka">Dhaka</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->districts=='Chittagong'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Chittagong">Chittagong</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->districts=='Khulna'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Khulna">Khulna</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->districts=='Rajshahi'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Rajshahi">Rajshahi</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->districts=='Narayanganj'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Narayanganj">Narayanganj</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->districts=='Rangpur'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Rangpur">Rangpur</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->districts=='Mymensingh'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Mymensingh">Mymensingh</option>
                            
                            
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->districts=='Anywhere in Bangladesh'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Anywhere in Bangladesh">Anywhere in Bangladesh</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Post Code</label>
                          <div class="input-group">
                            <input class="form-control" type="text" <?php if(!empty($obj_company)): ?> value="<?php echo e($obj_company->post_code); ?>" <?php endif; ?> name="post_code" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Billing Address</label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($obj_company)): ?> value="<?php echo e($obj_company->billing_address); ?>" <?php endif; ?> name="billing_address" type="text" placeholder="Billing Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Employeer Type</label>
                          <select class="form-control valid" id="employerType" name="employeer_type" aria-invalid="false">
                            <option value="" >Select Employer Type</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->employeer_type=='Employer'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Employer" >Employer</option>
                            <option <?php if(!empty($obj_company)): ?> <?php if($obj_company->employeer_type=='Recruiter'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Recruiter">Recruiter</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Website URL</label>
                          <div class="input-group">
                            <input class="form-control" type="text" <?php if(!empty($obj_company)): ?> value="<?php echo e($obj_company->website); ?>" <?php endif; ?> name="website" placeholder="Website URL...">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Company logo</label>
                          <div class="input-group">
                            <input class="form-control" name="logo" type="file">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group prifile-form">
                          <button class="btn btn-primary" id="companyRegistration" type="submit">Save</button>
                        </div>
                      </div>
                    </div>
</form>
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