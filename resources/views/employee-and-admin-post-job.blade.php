<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Employee and Admin Post Job Page</title>


  @include('layouts/header/dashboard-header')
  @include('layouts/sidebar/sidebar')

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">

          <div class="col-md-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Post a Job</h4>
              </div>

              <div class="content-details show">
                <div class="card">

                    @if(Session::get('message'))
                    <div class="alert alert-success" id="message">
                        <h4 class=" text-center text-success"> {{ Session::get('message') }}</h4>
                    </div>
                @endif
                <div class=" card card-default">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                  <div class="card-body card-block">
                  <form action="{{ route('post-new-job') }}" method="POST">
@csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Job Title <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" name="job_title" required="" placeholder="Job Title">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Job Type</label>
                          <select class="form-control valid" id="companyType" name="job_type" aria-invalid="false">
                            <option value="">Select Type</option>
                            <option value="Full Time" selected="selected">Full Time</option>
                            <option value="Part Time">Part Time</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Job Description</label>
                          <div class="input-group">
                            <input class="form-control" type="text" name="description" placeholder="Job Description">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Job Experience</label>
                          <div class="input-group">
                            <input class="form-control" name="exp" type="text" placeholder="Job Experience">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Gender <span>*</span></label>
                          <select class="form-control" id="fkOrganizationType" name="gender" required="">
                            <option selected="selected" value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option> 
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Extra Facilites</label>
                          <div class="input-group">
                            <input class="form-control" type="text" name="extra_facilites" placeholder="Extra Facilites">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Last Date for Apply</label>
                          <div class="input-group">
                            <input class="form-control" type="date" name="last_date" placeholder="Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">No. of Vecancies</label>
                          <div class="input-group">
                            <input class="form-control" name="no_of_vacancies" type="text" placeholder="Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Location</label>
                          <div class="input-group">
                            <input class="form-control" name="location" type="text" placeholder="Location">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Salary</label>
                          <div class="input-group">
                            <input class="form-control" name="salary" type="text" placeholder="Salary">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Additional Requirements</label>
                            <textarea class="form-control" name="additional_requirements" type="text" placeholder="Additional Requirements"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Educational Requirements</label>
                            <textarea class="form-control" name="edu_req" type="text" placeholder="Educational Requirements"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="select-category  profile-form">
                          <span>Select Category</span>
                          <select class="category form-control" name="category">
                            <option >Accounting</option>
                            <option >Administration</option>
                            <option >Advertising</option>
                            <option >Banking</option>
                            <option >Software</option>
                            <option >Hardware</option>
                            <option >Design</option>
                            <option >Data Entry</option>
                            <option >Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form"> 
                           <input type="submit" class="btn btn-info" value="Post">
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