<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Candidates Short List</title>


    @include('layouts/header/dashboard-header')
    @include('layouts/sidebar/admin-sidebar2')
    

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Candidates Pending List for <span class="job-title">Sytstem Architect</span></h4><!-- /.content-title -->
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
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($obj_jobPost as $item)
                        
                  
                    <tr>
                      <td>01</td>
                      <td>
                        <div class="name">
                        <h6>Name:</h6><p>{{ $item->fname }} {{ $item->lname }}</p>
                          <h6>Father Name:</h6><p>{{ $item->father_name }}</p>
                        </div>
                      </td>
                      <td>
                        <div class="pro-image">
                        <img src="{{ asset($item->image) }}" height="70px" width="70px" alt="">
                        </div>
                      </td>
                      <td>
                          <div><h6>Present Address</h6>
                            
                            <p>{{ $item->present_address }}</p>
                          </div>
                          <div><h6>Parmanent Address</h6>
                            <p>{{ $item->permanent_address }}</p>
                          </div>
                      </td>
                      <td>{{ $item->contact_no }}</td>
                      <td class="action">
                        <ul>
                          <li><a href="{{ route('candidate-profile',['id'=>$item->user_id]) }}" target="blank" class="profile">View Profile</a></li>
                          <li><a href="#" class="success">Select for job</a></li>
                          <li><a href="message.php" class="message">Send Message</a></li>
                        </ul>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>#No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Address</th>
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
