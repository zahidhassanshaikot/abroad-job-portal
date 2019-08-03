<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Job Seeker Dashboard</title>
  


  <?php echo $__env->make('layouts/header/dashboard-header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layouts/sidebar/job-seeker-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">

          <div class="col-md-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Add Your Information</h4>
              </div>

              <div class="content-details show">
                <div class="card">
                  <div class="card-body card-block">
                  <form action="<?php echo e(route('save-job-seeker-profile-info')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">First Name <span>*</span></label>
                          <div class="input-group">
                          <input class="form-control" readonly value="<?php echo e(Auth::user()->fname); ?>" type="text" required="" placeholder="First Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Last Name</label>
                          <div class="input-group">
                            <input class="form-control" readonly value="<?php echo e(Auth::user()->lname); ?>" type="text" placeholder="Last Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Father Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->father_name); ?>" <?php endif; ?> name="father_name" type="text" placeholder="Father Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Mother Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control"  <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->mother_name); ?>" <?php endif; ?> name="mother_name" type="text" placeholder="Mother Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Contact No <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->contact_no); ?>" <?php endif; ?> name="contact_no" type="text" placeholder="Contact No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">National ID</label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->nid); ?>" name="nid" <?php endif; ?>  type="number" placeholder="National ID">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Passport No</label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->passport_no); ?>" <?php endif; ?>  name="passport_no" type="text" placeholder="Passport No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Birthday Certificate</label>
                          <div class="input-group">
                            <input class="form-control" name="birth_certificate" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->birth_certificate); ?>" <?php endif; ?>  type="text" placeholder="Birthday Certificate">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Nationality <span>*</span></label>
                          <select class="form-control" id="fkOrganizationType" name="nationality" required="">
                            <option value="">Select Country</option>
                            <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->nationality=='Bangladesh'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Bangladesh">Bangladesh</option>
                            <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->nationality=='Australia'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Australia">Australia</option>
                            <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->nationality=='India'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="India">India</option>
                            <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->nationality=='United States'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="United States">United States</option>
                            <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->nationality=='Afganistan'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Afganistan">Afganistan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 padding-top">
                        <h4 class="content-title">Permanent Address</h4>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Districts <span>*</span></label>
                          <select class="form-control" id="fkDistrict" name="permanent_district"  required="">
                              <option value="">Select District</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->permanent_district=='Dhaka'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Dhaka">Dhaka</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->permanent_district=='Chittagong'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Chittagong">Chittagong</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->permanent_district=='Khulna'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Khulna">Khulna</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->permanent_district=='Rajshahi'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Rajshahi">Rajshahi</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->permanent_district=='Narayanganj'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Narayanganj">Narayanganj</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->permanent_district=='Rangpur'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Rangpur">Rangpur</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->permanent_district=='Mymensingh'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Mymensingh">Mymensingh</option>
                              
                              
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->permanent_district=='Anywhere in Bangladesh'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Anywhere in Bangladesh">Anywhere in Bangladesh</option>
                          
                            </select>  
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Post Code</label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->permanent_poster_code); ?>" <?php endif; ?> name="permanent_poster_code" type="text" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Address <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->permanent_address); ?>" <?php endif; ?> name="permanent_address" type="text" placeholder="Permanent Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">LinkedIn Profile </label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->linkedin_profile); ?>" <?php endif; ?> name="linkedin_profile" type="text" placeholder="LinkedIn Profile">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 padding-top">
                        <h4 class="content-title">Present Address</h4>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Districts <span>*</span></label>
                          <select class="form-control" id="fkDistrict" name="present_district"  required="">
                              <option value="">Select District</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->present_district=='Dhaka'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Dhaka">Dhaka</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->present_district=='Chittagong'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Chittagong">Chittagong</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->present_district=='Khulna'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Khulna">Khulna</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->present_district=='Rajshahi'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Rajshahi">Rajshahi</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->present_district=='Narayanganj'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Narayanganj">Narayanganj</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->present_district=='Rangpur'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Rangpur">Rangpur</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->present_district=='Mymensingh'): ?> selected="selected" <?php endif; ?> <?php endif; ?>  value="Mymensingh">Mymensingh</option>
                              
                              
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->present_district=='Anywhere in Bangladesh'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Anywhere in Bangladesh">Anywhere in Bangladesh</option>
                          
                            </select> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Post Code</label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->present_poster_code); ?>" <?php endif; ?> name="present_poster_code" type="text" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Address <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->present_address); ?>" <?php endif; ?> name="present_address" type="text" placeholder="Permanent Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Git Profile </label>
                          <div class="input-group">
                            <input class="form-control" name="git_profile" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->git_profile); ?>" <?php endif; ?> type="text" placeholder="Git Profile">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                          <div class="form-group gender">
                              <p class="form-control-label">Gender: </p>
                              <p>
                              <input id="male" <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->gender=='Male'): ?> checked  <?php endif; ?> <?php endif; ?>  name="gender"value="Male" type="radio">
                              <label for="male"> Male</label>
                              </p>
                              <p>
                              <input id="female"  <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->gender=='Female'): ?> checked  <?php endif; ?> <?php endif; ?> name="gender" type="radio" value="Female">
                              <label for="female"> Female</label>
                              </p>
                              <p>
                              <input id="other"  <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->gender=='Other'): ?> checked  <?php endif; ?> <?php endif; ?> name="gender" type="radio" value="Other">
                              <label for="other"> Other</label>
                              </p>
                          </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group profile-form">
                            <label for="maritalStatus">MaritalStatus</label>
                            <select id="maritalStatus" class="form-control" name="marital_status">
                              <option value="">Pick a Status...</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->marital_status=='Married'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Married">Married</option>
                              <option <?php if(!empty($seeker_profile)): ?> <?php if($seeker_profile->marital_status=='Unmarried'): ?> selected="selected" <?php endif; ?> <?php endif; ?> value="Unmarried">Unmarried</option>
                            </select>
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Date of Birth <span>*</span> </label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->DOB); ?>" <?php endif; ?> name="DOB" type="date" placeholder="Date of Birth">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Career Objective <span>*</span> </label>
                          <div class="input-group">
                            <input class="form-control" <?php if(!empty($seeker_profile)): ?> value="<?php echo e($seeker_profile->career_objective); ?>" <?php endif; ?> name="career_objective" type="text" placeholder="Career Objective">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Image <span>*</span> </label>
                          <div class="input-group">
                          <input type="file" name="image">
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