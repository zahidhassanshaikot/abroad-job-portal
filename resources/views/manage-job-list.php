<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Manage Job List</title>


<?php include 'header/dashboard-header.php'; ?>

<?php include 'sidebar/sidebar.php'; ?>

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
                    <tr>
                      <td>01</td>
                      <td>System Architect</td>
                      <td>2018/12/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>Accountant</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>Customer Support</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>04</td>
                      <td>Systems Administrator</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>05</td>
                      <td>Senior Marketing Designer</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>06</td>
                      <td>Software Engineer</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>07</td>
                      <td>Sales Assistant</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>08</td>
                      <td>Senior Javascript Developer</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>09</td>
                      <td>Accountant</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Junior Technical Author</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Senior Javascript Developer</td>
                      <td>2019/01/10</td>
                      <td>2019/02/10</td>
                      <td>10</td>
                      <td>
                        <ul>
                          <li><a href="candidates-short-list.php">Show List</a></li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>#No</th>
                      <th>Job Title</th>
                      <th>Post Date</th>
                      <th>Deadline</th>
                      <th>Total Apply</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->

      <?php include 'footer/footer.php'; ?>



  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="assets/js/tables/dataTables.bootstrap4.min.js"></script>

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