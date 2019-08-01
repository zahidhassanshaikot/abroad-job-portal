<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin</title>

<?php include 'header/dashboard-header.php'; ?>

<?php include 'sidebar/admin-sidebar.php'; ?>
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">

          <div class="col-12">
            <div class="section-content">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="statistic-box m-0">
                    <h4 class="statistic-title float-left">Total Jobs</h4>
                    <div class="statistic-details">
                      <span class="count float-left">10</span><!-- /.count -->
                      <span class="statistic-icon color-success float-right"><i class="pe-7s-users"></i></span><!-- /.statistic-icon -->
                    </div><!-- /.statistic-details -->
                  </div><!-- /.statistic-box -->
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="statistic-box m-0">
                    <h4 class="statistic-title float-left">Inactive Jobs</h4>
                    <div class="statistic-details">
                      <span class="count float-left">12</span><!-- /.count -->
                      <span class="statistic-icon color-primary float-right"><i class="pe-7s-ticket"></i></span><!-- /.statistic-icon -->
                    </div><!-- /.statistic-details -->
                  </div><!-- /.statistic-box -->
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="statistic-box m-0">
                    <h4 class="statistic-title float-left">Active Jobs</h4>
                    <div class="statistic-details">
                      <span class="count float-left">13</span><!-- /.count -->
                      <span class="statistic-icon color-purple float-right"><i class="pe-7s-albums"></i></span><!-- /.statistic-icon -->
                    </div><!-- /.statistic-details -->
                  </div><!-- /.statistic-box -->
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="statistic-box m-0">
                    <h4 class="statistic-title float-left">Total Apply</h4>
                    <div class="statistic-details">
                      <span class="count float-left">15</span><!-- /.count -->
                      <span class="statistic-icon color-danger float-right"><i class="pe-7s-credit"></i></span><!-- /.statistic-icon -->
                    </div><!-- /.statistic-details -->
                  </div><!-- /.statistic-box -->
                </div>

              <div class="col-12">
                <div class="section-content">
                  <div class="content-head">
                    <h4 class="content-title">Apply Candidates</h4><!-- /.content-title -->
                  </div><!-- /.content-head -->

                  <div class="content-details show">
                    <table id="data-table" class="table data-table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Name of Candidates</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>01</td>
                          <td>John</td>
                          <td>john@gmail.com</td>
                          <td>+12254545</td>
                          <td>Alaska</td>
                          <td>
                            <ul>
                              <li><a href="candidate-profile.php">View Profile</a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>02</td>
                          <td>Mark</td>
                          <td>mark@gmail.com</td>
                          <td>+72554545</td>
                          <td>Florida</td>
                          <td>
                            <ul>
                              <li><a href="candidate-profile.php">View Profile</a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>03</td>
                          <td>John</td>
                          <td>john@gmail.com</td>
                          <td>+12254545</td>
                          <td>Alaska</td>
                          <td>
                            <ul>
                              <li><a href="candidate-profile.php">View Profile</a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>04</td>
                          <td>Mark</td>
                          <td>mark@gmail.com</td>
                          <td>+72554545</td>
                          <td>Florida</td>
                          <td>
                            <ul>
                              <li><a href="candidate-profile.php">View Profile</a></li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>

                      <tfoot>
                        <tr>
                          <th>#No</th>
                          <th>Name of Candidates</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div><!-- /.content-details -->
                </div>
              </div>
              <div class="col-12">
                <div class="section-content">
                  <div class="content-head">
                    <h4 class="content-title">Short List</h4><!-- /.content-title -->
                  </div><!-- /.content-head -->

                  <div class="content-details show">
                    <table id="data-table" class="table data-table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Name of Candidates</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>01</td>
                          <td>John</td>
                          <td>john@gmail.com</td>
                          <td>+12254545</td>
                          <td>Alaska</td>
                          <td>
                            <ul>
                              <li><a href="candidate-profile.php">View Profile</a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>02</td>
                          <td>Mark</td>
                          <td>mark@gmail.com</td>
                          <td>+72554545</td>
                          <td>Florida</td>
                          <td>
                            <ul>
                              <li><a href="candidate-profile.php">View Profile</a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>03</td>
                          <td>John</td>
                          <td>john@gmail.com</td>
                          <td>+12254545</td>
                          <td>Alaska</td>
                          <td>
                            <ul>
                              <li><a href="candidate-profile.php">View Profile</a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>04</td>
                          <td>Mark</td>
                          <td>mark@gmail.com</td>
                          <td>+72554545</td>
                          <td>Florida</td>
                          <td>
                            <ul>
                              <li><a href="candidate-profile.php">View Profile</a></li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>

                      <tfoot>
                        <tr>
                          <th>#No</th>
                          <th>Name of Candidates</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div><!-- /.content-details -->
                </div>
              </div>



              </div>
            </div><!-- /.section-content -->
          </div>
        </div>
      </div><!-- /.contents-inner -->

      <?php include 'footer/footer.php'; ?>





  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/index/index-01.js"></script>
  <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:00:23 GMT -->
</html>
