<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Manage Job List</title>




@include('layouts/header/dashboard-header')
@include('layouts/sidebar/sidebar')


    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Manage Jobs</h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>#No</th>
                      <th>Job Title</th>
                      <th>Post Date</th>
                      <th>Deadline</th>
                      <th>Total Apply</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($obj_jobPost as $item)
                      <?php $total=DB::table('job_applications')->where('job_post_id', $item->id)->count() ?>
                    
                    <tr>
                    <td>{{ $item->id }}</td>
                      <td>{{ $item->job_title }}</td>
                      <td>{{ $item->created_at }}</td>
                      <td>{{ $item->last_date }}</td>
                    <td>{{ $total }}</td>
                      <td>
                        <ul>
                          <li><a href="{{ route('candidates-list',['id'=> $item->id ]) }}">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                
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

  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      "use strict";

      $('.data-table').DataTable();
    });
  </script>
  

</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:01:56 GMT -->
</html>