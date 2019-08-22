<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Job Seeker Dashboard</title>
  


  @include('layouts/header/dashboard-header')
  @include('layouts/sidebar/job-seeker-sidebar') 

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">




          <div class="col-md-12">
              @if(Session::get('message'))
              <div class="alert alert-success" id="message">
                <h4 class=" text-center text-success"> {{ Session::get('message') }}</h4>
              </div>
            @endif
            @if(Session::get('error_m'))
              <div class="alert alert-danger" id="message">
                <h4 class=" text-center text-danger"> {{ Session::get('error_m') }}</h4>
              </div>
            @endif

            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Add Your Information</h4>
              </div>

              <div class="content-details show">
                <div class="card">
                  <div class="card-body card-block">
                  <form action="{{ route('save-job-seeker-profile-info') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">First Name <span>*</span></label>
                          <div class="input-group">
                          <input class="form-control" readonly value="{{ Auth::user()->fname }}" type="text" required="" placeholder="First Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Last Name</label>
                          <div class="input-group">
                            <input class="form-control" readonly value="{{ Auth::user()->lname }}" type="text" placeholder="Last Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Father Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->father_name}}" @endif name="father_name" type="text" placeholder="Father Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Mother Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control"  @if(!empty($seeker_profile)) value="{{$seeker_profile->mother_name}}" @endif name="mother_name" type="text" placeholder="Mother Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Contact No <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->contact_no}}" @endif name="contact_no" type="text" placeholder="Contact No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">National ID</label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->nid}}"  @endif name="nid" type="number" placeholder="National ID">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Passport No</label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->passport_no}}" @endif  name="passport_no" type="text" placeholder="Passport No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Birthday Certificate</label>
                          <div class="input-group">
                            <input class="form-control" name="birth_certificate" @if(!empty($seeker_profile)) value="{{$seeker_profile->birth_certificate}}" @endif  type="text" placeholder="Birthday Certificate">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Nationality <span>*</span></label>
                          <select class="form-control" id="fkOrganizationType" name="nationality" required="">
                            <option value="">Select Country</option>
                            <option @if(!empty($seeker_profile)) @if($seeker_profile->nationality=='Bangladesh') selected="selected" @endif @endif value="Bangladesh">Bangladesh</option>
                            <option @if(!empty($seeker_profile)) @if($seeker_profile->nationality=='Australia') selected="selected" @endif @endif value="Australia">Australia</option>
                            <option @if(!empty($seeker_profile)) @if($seeker_profile->nationality=='India') selected="selected" @endif @endif value="India">India</option>
                            <option @if(!empty($seeker_profile)) @if($seeker_profile->nationality=='United States') selected="selected" @endif @endif value="United States">United States</option>
                            <option @if(!empty($seeker_profile)) @if($seeker_profile->nationality=='Afganistan') selected="selected" @endif @endif value="Afganistan">Afganistan</option>
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
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->permanent_district=='Dhaka') selected="selected" @endif @endif  value="Dhaka">Dhaka</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->permanent_district=='Chittagong') selected="selected" @endif @endif  value="Chittagong">Chittagong</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->permanent_district=='Khulna') selected="selected" @endif @endif  value="Khulna">Khulna</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->permanent_district=='Rajshahi') selected="selected" @endif @endif  value="Rajshahi">Rajshahi</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->permanent_district=='Narayanganj') selected="selected" @endif @endif  value="Narayanganj">Narayanganj</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->permanent_district=='Rangpur') selected="selected" @endif @endif  value="Rangpur">Rangpur</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->permanent_district=='Mymensingh') selected="selected" @endif @endif  value="Mymensingh">Mymensingh</option>
                              
                              {{-- <option value="157">Barisal</option>
                              <option value="158">Tungi</option>
                              <option value="159">Jessore</option>
                              <option value="160">Comilla</option>
                              <option value="161">Nawabganj</option>
                              <option value="162">Dinajpur</option>
                              <option value="163">Bogra</option>
                              <option value="164">Sylhet</option>
                              <option value="165">Brahmanbaria</option>
                              <option value="166">Tangail</option>
                              <option value="167">Jamalpur</option>
                              <option value="168">Pabna</option>
                              <option value="169">Naogaon</option>
                              <option value="170">Sirajganj</option>
                              <option value="171">Narsinghdi</option>
                              <option value="172">Saidpur</option>
                              <option value="173">Gazipur</option>
                              <option value="4080">Barguna</option>
                              <option value="4081">Bhola</option>
                              <option value="4082">Jhalokati</option>
                              <option value="4083">Patuakhali</option>
                              <option value="4084">Pirojpur</option>
                              <option value="4085">Bandarban</option>
                              <option value="4086">Chandpur</option>
                              <option value="4087">Cox's Bazar</option>
                              <option value="4088">Feni</option>
                              <option value="4089">Khagrachhari</option>
                              <option value="4090">Lakshmipur</option>
                              <option value="4091">Noakhali</option>
                              <option value="4092">Rangamati</option>
                              <option value="4093">Gopalganj</option>
                              <option value="4094">Kishoreganj</option>
                              <option value="4095">Madaripur</option>
                              <option value="4096">Manikganj</option>
                              <option value="4097">Munshiganj</option>
                              <option value="4098">Netrakona</option>
                              <option value="4099">Rajbari</option>
                              <option value="4100">Shariatpur</option>
                              <option value="4101">Sherpur</option>
                              <option value="4102">Jhenaidah</option>
                              <option value="4103">Kushtia</option>
                              <option value="4104">Magura</option>
                              <option value="4105">Meherpur</option>
                              <option value="4106">Narail</option>
                              <option value="4107">Satkhira</option>
                              <option value="4108">Sunamganj</option>
                              <option value="4109">Habiganj</option>
                              <option value="4110">Moulvibazar</option>
                              <option value="4111">Rangpur</option>
                              <option value="4112">Dinajpur</option>
                              <option value="4113">Gaibandha</option>
                              <option value="4114">Kurigram</option>
                              <option value="4115">Lalmonirhat</option>
                              <option value="4116">Nilphamari</option>
                              <option value="4117">Panchagarh</option>
                              <option value="4118">Thakurgaon</option>
                              <option value="4119">Bagerhat</option> --}}
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->permanent_district=='Anywhere in Bangladesh') selected="selected" @endif @endif value="Anywhere in Bangladesh">Anywhere in Bangladesh</option>
                          
                            </select>  
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Post Code</label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->permanent_poster_code}}" @endif name="permanent_poster_code" type="text" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Address <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->permanent_address}}" @endif name="permanent_address" type="text" placeholder="Permanent Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">LinkedIn Profile </label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->linkedin_profile}}" @endif name="linkedin_profile" type="text" placeholder="LinkedIn Profile">
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
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->present_district=='Dhaka') selected="selected" @endif @endif  value="Dhaka">Dhaka</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->present_district=='Chittagong') selected="selected" @endif @endif  value="Chittagong">Chittagong</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->present_district=='Khulna') selected="selected" @endif @endif  value="Khulna">Khulna</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->present_district=='Rajshahi') selected="selected" @endif @endif  value="Rajshahi">Rajshahi</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->present_district=='Narayanganj') selected="selected" @endif @endif  value="Narayanganj">Narayanganj</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->present_district=='Rangpur') selected="selected" @endif @endif  value="Rangpur">Rangpur</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->present_district=='Mymensingh') selected="selected" @endif @endif  value="Mymensingh">Mymensingh</option>
                              
                              {{-- <option value="157">Barisal</option>
                              <option value="158">Tungi</option>
                              <option value="159">Jessore</option>
                              <option value="160">Comilla</option>
                              <option value="161">Nawabganj</option>
                              <option value="162">Dinajpur</option>
                              <option value="163">Bogra</option>
                              <option value="164">Sylhet</option>
                              <option value="165">Brahmanbaria</option>
                              <option value="166">Tangail</option>
                              <option value="167">Jamalpur</option>
                              <option value="168">Pabna</option>
                              <option value="169">Naogaon</option>
                              <option value="170">Sirajganj</option>
                              <option value="171">Narsinghdi</option>
                              <option value="172">Saidpur</option>
                              <option value="173">Gazipur</option>
                              <option value="4080">Barguna</option>
                              <option value="4081">Bhola</option>
                              <option value="4082">Jhalokati</option>
                              <option value="4083">Patuakhali</option>
                              <option value="4084">Pirojpur</option>
                              <option value="4085">Bandarban</option>
                              <option value="4086">Chandpur</option>
                              <option value="4087">Cox's Bazar</option>
                              <option value="4088">Feni</option>
                              <option value="4089">Khagrachhari</option>
                              <option value="4090">Lakshmipur</option>
                              <option value="4091">Noakhali</option>
                              <option value="4092">Rangamati</option>
                              <option value="4093">Gopalganj</option>
                              <option value="4094">Kishoreganj</option>
                              <option value="4095">Madaripur</option>
                              <option value="4096">Manikganj</option>
                              <option value="4097">Munshiganj</option>
                              <option value="4098">Netrakona</option>
                              <option value="4099">Rajbari</option>
                              <option value="4100">Shariatpur</option>
                              <option value="4101">Sherpur</option>
                              <option value="4102">Jhenaidah</option>
                              <option value="4103">Kushtia</option>
                              <option value="4104">Magura</option>
                              <option value="4105">Meherpur</option>
                              <option value="4106">Narail</option>
                              <option value="4107">Satkhira</option>
                              <option value="4108">Sunamganj</option>
                              <option value="4109">Habiganj</option>
                              <option value="4110">Moulvibazar</option>
                              <option value="4111">Rangpur</option>
                              <option value="4112">Dinajpur</option>
                              <option value="4113">Gaibandha</option>
                              <option value="4114">Kurigram</option>
                              <option value="4115">Lalmonirhat</option>
                              <option value="4116">Nilphamari</option>
                              <option value="4117">Panchagarh</option>
                              <option value="4118">Thakurgaon</option>
                              <option value="4119">Bagerhat</option> --}}
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->present_district=='Anywhere in Bangladesh') selected="selected" @endif @endif value="Anywhere in Bangladesh">Anywhere in Bangladesh</option>
                          
                            </select> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Post Code</label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->present_poster_code}}" @endif name="present_poster_code" type="text" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Address <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->present_address}}" @endif name="present_address" type="text" placeholder="Permanent Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Git Profile </label>
                          <div class="input-group">
                            <input class="form-control" name="git_profile" @if(!empty($seeker_profile)) value="{{$seeker_profile->git_profile}}" @endif type="text" placeholder="Git Profile">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                          <div class="form-group gender">
                              <p class="form-control-label">Gender: </p>
                              <p>
                              <input id="male" @if(!empty($seeker_profile)) @if($seeker_profile->gender=='Male') checked  @endif @endif  name="gender"value="Male" type="radio">
                              <label for="male"> Male</label>
                              </p>
                              <p>
                              <input id="female"  @if(!empty($seeker_profile)) @if($seeker_profile->gender=='Female') checked  @endif @endif name="gender" type="radio" value="Female">
                              <label for="female"> Female</label>
                              </p>
                              <p>
                              <input id="other"  @if(!empty($seeker_profile)) @if($seeker_profile->gender=='Other') checked  @endif @endif name="gender" type="radio" value="Other">
                              <label for="other"> Other</label>
                              </p>
                          </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group profile-form">
                            <label for="maritalStatus">MaritalStatus</label>
                            <select id="maritalStatus" class="form-control" name="marital_status">
                              <option value="">Pick a Status...</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->marital_status=='Married') selected="selected" @endif @endif value="Married">Married</option>
                              <option @if(!empty($seeker_profile)) @if($seeker_profile->marital_status=='Unmarried') selected="selected" @endif @endif value="Unmarried">Unmarried</option>
                            </select>
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Date of Birth <span>*</span> </label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->DOB}}" @endif name="DOB" type="date" placeholder="Date of Birth">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Career Objective <span>*</span> </label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($seeker_profile)) value="{{$seeker_profile->career_objective}}" @endif name="career_objective" type="text" placeholder="Career Objective">
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