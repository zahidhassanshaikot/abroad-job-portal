<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Company List</title>


    <?php include 'header/dashboard-header.php'; ?>

    <?php include 'sidebar/admin-sidebar2.php'; ?>

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
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>
                          <h6 class="company-name">Liondean LTD</h6>
                      </td>
                      <td>
                        <div class="company-pro-image">
                          <a href="#"><img src="img/company/Logo1.png" alt=""></a>
                        </div>
                      </td>
                      <td>
                          <h6>Gulshan,Dhaka</h6>
                      </td>
                      <td>
                        <div class="phone">
                          <p> +11722545455</p>
                        </div>
                        <div class="email">
                          <p>liondean@gmail.com</p>
                        </div>
                      </td>
                      <td class="action">
                        <ul>
                          <li><a href="total-job.php" target="blank" class="profile">Details</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>
                          <h6 class="company-name">Backrab</h6>
                      </td>
                      <td>
                        <div class="company-pro-image">
                          <a href="#"><img src="img/company/Logo2.jpg" alt=""></a>
                        </div>
                      </td>
                      <td>
                          <h6>Road 6, Mirpur 10, Dhaka</h6>
                      </td>
                      <td>
                        <div class="phone">
                          <p> +11722545455</p>
                        </div>
                        <div class="email">
                          <p>backrab@gmail.com</p>
                        </div>
                      </td>
                      <td class="action">
                        <ul>
                          <li><a href="total-job.php" target="blank" class="profile">Details</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>
                        <h6>Research in Motion</h6>
                      </td>
                      <td>
                        <div class="company-pro-image">
                          <a href="#"><img src="img/company/Logo3.jpg" alt=""></a>
                        </div>
                      </td>
                      <td>
                          <h6>Banani, Dhaka</h6>
                      </td>
                      <td>
                        <div class="phone">
                          <p> +11722545455</p>
                        </div>
                        <div class="email">
                          <p>research@gmail.com</p>
                        </div>
                      </td>
                      <td class="action">
                        <ul>
                          <li><a href="total-job.php" target="blank" class="profile">Details</a></li>
                        </ul>
                      </td>
                    </tr>
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
