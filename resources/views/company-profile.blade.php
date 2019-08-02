<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Company Profile</title>


  @include('layouts/header/dashboard-header')
  @include('layouts/sidebar/sidebar')

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
                  <form action="{{ route('save-company-profile-info') }}" method="POST" enctype="multipart/form-data">
  @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Company Name <span>*</span></label>
                          <div class="input-group">
                            <input class="form-control" type="text" name="company_name" @if(!empty($obj_company)) value="{{$obj_company->company_name}}" @endif required="" placeholder="Company Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Display Name</label>
                          <div class="input-group">
                            <input class="form-control" name="display_name" type="text" @if(!empty($obj_company)) value="{{$obj_company->display_name}}" @endif placeholder="Display Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Company Type</label>
                          <select class="form-control valid" id="companyType"  name="company_type" aria-invalid="false">
                            <option value="">Select Type</option>
                            <option value="Local" @if(!empty($obj_company)) @if($obj_company->company_type=='Local') selected="selected" @endif @endif >Local</option>
                            <option value="Foreign" @if(!empty($obj_company)) @if($obj_company->company_type=='Foreign') selected="selected" @endif @endif>Foreign</option>
                            <option value="Multinational" @if(!empty($obj_company)) @if($obj_company->company_type=='Multinational') selected="selected" @endif @endif>Multinational</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Organization Type <span>*</span></label>
                          <select class="form-control" id="fkOrganizationType" name="organization_type" required="">
                            <option value="">Select Organization Types</option>
                            <option @if(!empty($obj_company)) @if($obj_company->organization_type=='Private') selected="selected" @endif @endif value="Private">Private</option>
                            <option @if(!empty($obj_company)) @if($obj_company->organization_type=='Government') selected="selected" @endif @endif value="Government">Government</option>
                            <option @if(!empty($obj_company)) @if($obj_company->organization_type=='Semi-Government') selected="selected" @endif @endif value="Semi-Government">Semi-Government</option>
                            <option @if(!empty($obj_company)) @if($obj_company->organization_type=='NGO') selected="selected" @endif @endif value="NGO">NGO</option>
                            <option @if(!empty($obj_company)) @if($obj_company->organization_type=='Institutes') selected="selected" @endif @endif value="Institutes">Institutes</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Industry Type</label>
                          <select class="form-control valid" id="IndustryType" name="industry_type" aria-invalid="false">
                            <option value="">Select Industry Type</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Accounting/Auditing') selected="selected" @endif @endif value="Accounting/Auditing">Accounting/Auditing</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Administration') selected="selected" @endif @endif value="Administration">Administration</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Advertising') selected="selected" @endif @endif value="Advertising">Advertising</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Aerospace and Defense') selected="selected" @endif @endif value="Aerospace and Defense">Aerospace and Defense</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Agriculture/Forestry/Fishing') selected="selected" @endif @endif value="Agriculture/Forestry/Fishing">Agriculture/Forestry/Fishing</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Airlines/Aviation') selected="selected" @endif @endif value="Airlines/Aviation">Airlines/Aviation</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Architecture') selected="selected" @endif @endif value="Architecture">Architecture</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Arts/Entertainment/and Media') selected="selected" @endif @endif value="Arts/Entertainment/and Media">Arts/Entertainment/and Media</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Software') selected="selected" @endif @endif value="Software">Software</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Aviation/Marine Refueling') selected="selected" @endif @endif value="Aviation/Marine Refueling">Aviation/Marine Refueling</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Banking') selected="selected" @endif @endif value="Banking">Banking</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Biotechnology') selected="selected" @endif @endif value="Biotechnology">Biotechnology</option>
                            <option @if(!empty($obj_company)) @if($obj_company->industry_type=='Others') selected="selected" @endif @endif value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Address</label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($obj_company)) value="{{$obj_company->address}}" @endif required name="address" type="text" placeholder="Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Districts <span>*</span></label>
                          <select class="form-control" id="fkDistrict" name="districts"  required="">
                            <option value="">Select District</option>
                            <option @if(!empty($obj_company)) @if($obj_company->districts=='Dhaka') selected="selected" @endif @endif  value="Dhaka">Dhaka</option>
                            <option @if(!empty($obj_company)) @if($obj_company->districts=='Chittagong') selected="selected" @endif @endif  value="Chittagong">Chittagong</option>
                            <option @if(!empty($obj_company)) @if($obj_company->districts=='Khulna') selected="selected" @endif @endif  value="Khulna">Khulna</option>
                            <option @if(!empty($obj_company)) @if($obj_company->districts=='Rajshahi') selected="selected" @endif @endif  value="Rajshahi">Rajshahi</option>
                            <option @if(!empty($obj_company)) @if($obj_company->districts=='Narayanganj') selected="selected" @endif @endif  value="Narayanganj">Narayanganj</option>
                            <option @if(!empty($obj_company)) @if($obj_company->districts=='Rangpur') selected="selected" @endif @endif  value="Rangpur">Rangpur</option>
                            <option @if(!empty($obj_company)) @if($obj_company->districts=='Mymensingh') selected="selected" @endif @endif  value="Mymensingh">Mymensingh</option>
                            
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
                            <option @if(!empty($obj_company)) @if($obj_company->districts=='Anywhere in Bangladesh') selected="selected" @endif @endif value="Anywhere in Bangladesh">Anywhere in Bangladesh</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Post Code</label>
                          <div class="input-group">
                            <input class="form-control" type="text" @if(!empty($obj_company)) value="{{$obj_company->post_code}}" @endif name="post_code" placeholder="Post Code">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Billing Address</label>
                          <div class="input-group">
                            <input class="form-control" @if(!empty($obj_company)) value="{{$obj_company->billing_address}}" @endif name="billing_address" type="text" placeholder="Billing Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Employeer Type</label>
                          <select class="form-control valid" id="employerType" name="employeer_type" aria-invalid="false">
                            <option value="" >Select Employer Type</option>
                            <option @if(!empty($obj_company)) @if($obj_company->employeer_type=='Employer') selected="selected" @endif @endif value="Employer" >Employer</option>
                            <option @if(!empty($obj_company)) @if($obj_company->employeer_type=='Recruiter') selected="selected" @endif @endif value="Recruiter">Recruiter</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group profile-form">
                          <label class="form-control-label">Website URL</label>
                          <div class="input-group">
                            <input class="form-control" type="text" @if(!empty($obj_company)) value="{{$obj_company->website}}" @endif name="website" placeholder="Website URL...">
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