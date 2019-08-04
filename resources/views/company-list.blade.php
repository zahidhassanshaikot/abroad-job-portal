<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Company List</title>


  @include('layouts/header/dashboard-header')
  @include('layouts/sidebar/sidebar')

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Company List</h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>#No</th>
                      <th>Company Name</th>
                      <th>Company Logo</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>Website</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($obj_company as $company)
                    <tr>
                    <td>{{ $company->id}}</td>
                      <td>
                          <h6 class="company-name">{{ $company->company_name}}</h6>
                      </td>
                      <td>
                        <div class="company-pro-image">
                          <a href="#"><img src="{{ asset($company->logo)}}" alt=""></a>
                        </div>
                      </td>
                      <td>
                      <h6>{{ $company->address }}</h6>
                      </td>
                      <td>
                        <div class="phone">
                          <p>{{ $company->phone_no }}</p>
                        </div>
                        <div class="email">
                          <p>{{ $company->email }}</p>
                        </div>
                      </td>
                      <td>
                        <div class="phone">
                          <p>{{ $company->website }}</p>
                        </div>
                        
                      </td>
                      <td class="action">
                        <ul>
                        <li><a href="{{ route('manage-job-list',['id'=>$company->user_id])}}" target="blank" class="profile">Details</a></li>
                        </ul>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>#No</th>
                      <th>Company Name</th>
                      <th>Company Logo</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->
      @include('layouts/footer/footer')



  <script src="{{asset('design')}}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{asset('design')}}/assets/js/plugins.js"></script>
  <script src="{{asset('design')}}/assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="{{asset('design')}}/assets/js/tables/dataTables.bootstrap4.min.js"></script>

  <script src="{{asset('design')}}/assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      "use strict";

      $('.data-table').DataTable();
    });
  </script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:01:56 GMT -->
</html>
