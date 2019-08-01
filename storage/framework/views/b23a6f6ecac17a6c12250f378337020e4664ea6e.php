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
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">First Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" required="" placeholder="First Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Last Name</label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Last Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Father Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Father Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Mother Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Mother Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Contact No <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Contact No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">National ID</label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="National ID">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Passport No</label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Passport No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Birthday Certificate</label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Birthday Certificate">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Nationality <span>*</span></label>
                          <select class="form-control" id="fkOrganizationType" name="OrganizationType" required="">
                            <option selected="selected" value="">Select Country</option>
                            <option value="1">Bangladesh</option>
                            <option value="2">Australia</option>
                            <option value="3">India</option>
                            <option value="4">United States</option>
                            <option value="5">Afganistan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 padding-top">
                        <h4 class="content-title">Permanent Address</h4>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Districts <span>*</span></label>
                          <select class="form-control" id="fkDistrict" name="fkDistrict" required=""><option selected="selected" value="">Select District</option><option value="150">Dhaka</option><option value="151">Chittagong</option><option value="152">Khulna</option><option value="153">Rajshahi</option><option value="154">Narayanganj</option><option value="155">Rangpur</option><option value="156">Mymensingh</option><option value="157">Barisal</option><option value="158">Tungi</option><option value="159">Jessore</option><option value="160">Comilla</option><option value="161">Nawabganj</option><option value="162">Dinajpur</option><option value="163">Bogra</option><option value="164">Sylhet</option><option value="165">Brahmanbaria</option><option value="166">Tangail</option><option value="167">Jamalpur</option><option value="168">Pabna</option><option value="169">Naogaon</option><option value="170">Sirajganj</option><option value="171">Narsinghdi</option><option value="172">Saidpur</option><option value="173">Gazipur</option><option value="4080">Barguna</option><option value="4081">Bhola</option><option value="4082">Jhalokati</option><option value="4083">Patuakhali</option><option value="4084">Pirojpur</option><option value="4085">Bandarban</option><option value="4086">Chandpur</option><option value="4087">Cox's Bazar</option><option value="4088">Feni</option><option value="4089">Khagrachhari</option><option value="4090">Lakshmipur</option><option value="4091">Noakhali</option><option value="4092">Rangamati</option><option value="4093">Gopalganj</option><option value="4094">Kishoreganj</option><option value="4095">Madaripur</option><option value="4096">Manikganj</option><option value="4097">Munshiganj</option><option value="4098">Netrakona</option><option value="4099">Rajbari</option><option value="4100">Shariatpur</option><option value="4101">Sherpur</option><option value="4102">Jhenaidah</option><option value="4103">Kushtia</option><option value="4104">Magura</option><option value="4105">Meherpur</option><option value="4106">Narail</option><option value="4107">Satkhira</option><option value="4108">Sunamganj</option><option value="4109">Habiganj</option><option value="4110">Moulvibazar</option><option value="4111">Rangpur</option><option value="4112">Dinajpur</option><option value="4113">Gaibandha</option><option value="4114">Kurigram</option><option value="4115">Lalmonirhat</option><option value="4116">Nilphamari</option><option value="4117">Panchagarh</option><option value="4118">Thakurgaon</option><option value="4119">Bagerhat</option><option value="4120">Anywhere in Bangladesh</option></select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Post Code</label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Address <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Permanent Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">LinkedIn Profile </label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="LinkedIn Profile">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 padding-top">
                        <h4 class="content-title">Present Address</h4>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Districts <span>*</span></label>
                          <select class="form-control" id="fkDistrict" name="fkDistrict" required=""><option selected="selected" value="">Select District</option><option value="150">Dhaka</option><option value="151">Chittagong</option><option value="152">Khulna</option><option value="153">Rajshahi</option><option value="154">Narayanganj</option><option value="155">Rangpur</option><option value="156">Mymensingh</option><option value="157">Barisal</option><option value="158">Tungi</option><option value="159">Jessore</option><option value="160">Comilla</option><option value="161">Nawabganj</option><option value="162">Dinajpur</option><option value="163">Bogra</option><option value="164">Sylhet</option><option value="165">Brahmanbaria</option><option value="166">Tangail</option><option value="167">Jamalpur</option><option value="168">Pabna</option><option value="169">Naogaon</option><option value="170">Sirajganj</option><option value="171">Narsinghdi</option><option value="172">Saidpur</option><option value="173">Gazipur</option><option value="4080">Barguna</option><option value="4081">Bhola</option><option value="4082">Jhalokati</option><option value="4083">Patuakhali</option><option value="4084">Pirojpur</option><option value="4085">Bandarban</option><option value="4086">Chandpur</option><option value="4087">Cox's Bazar</option><option value="4088">Feni</option><option value="4089">Khagrachhari</option><option value="4090">Lakshmipur</option><option value="4091">Noakhali</option><option value="4092">Rangamati</option><option value="4093">Gopalganj</option><option value="4094">Kishoreganj</option><option value="4095">Madaripur</option><option value="4096">Manikganj</option><option value="4097">Munshiganj</option><option value="4098">Netrakona</option><option value="4099">Rajbari</option><option value="4100">Shariatpur</option><option value="4101">Sherpur</option><option value="4102">Jhenaidah</option><option value="4103">Kushtia</option><option value="4104">Magura</option><option value="4105">Meherpur</option><option value="4106">Narail</option><option value="4107">Satkhira</option><option value="4108">Sunamganj</option><option value="4109">Habiganj</option><option value="4110">Moulvibazar</option><option value="4111">Rangpur</option><option value="4112">Dinajpur</option><option value="4113">Gaibandha</option><option value="4114">Kurigram</option><option value="4115">Lalmonirhat</option><option value="4116">Nilphamari</option><option value="4117">Panchagarh</option><option value="4118">Thakurgaon</option><option value="4119">Bagerhat</option><option value="4120">Anywhere in Bangladesh</option></select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Post Code</label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Address <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Permanent Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">LinkedIn Profile </label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="LinkedIn Profile">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                          <div class="form-group gender">
                              <p class="form-control-label">Gender: </p>
                              <p>
                              <input id="male" name="gender" type="radio">
                              <label for="male"> Male</label>
                              </p>
                              <p>
                              <input id="female" name="gender" type="radio" value="F">
                              <label for="female"> Female</label>
                              </p>
                              <p>
                              <input id="other" name="gender" type="radio" value="O">
                              <label for="other"> Other</label>
                              </p>
                          </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group profile-form">
                            <label for="maritalStatus">MaritalStatus</label>
                            <select id="maritalStatus" class="form-control" name="maritalStatus">
                              <option selected="selected" value="">Pick a Status...</option>
                              <option value="M">Married</option>
                              <option value="U">Unmarried</option>
                            </select>
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Date of Birth <span>*</span> </label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Date of Birth">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Career Objective <span>*</span> </label>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Career Objective">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group prifile-form">
                          <button class="btn btn-primary" id="companyRegistration" type="button">Save</button>
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