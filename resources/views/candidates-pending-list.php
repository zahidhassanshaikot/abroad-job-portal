<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Candidates Pending List</title>


    <?php include 'header/dashboard-header.php'; ?>

    <?php include 'sidebar/admin-sidebar2.php'; ?>

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
                    <tr>
                      <td>01</td>
                      <td>
                        <div class="name">
                          <h6>Name:</h6><p>Md.Zamal Hossain</p>
                          <h6>Father Name:</h6><p>Md.Kamal Hossain</p>
                        </div>
                      </td>
                      <td>
                        <div class="pro-image">
                          <img src="img/user2.png" alt="">
                        </div>
                      </td>
                      <td>
                          <div><h6>Present Address</h6>
                            <p>Dhanmondi 32,Dhaka</p>
                          </div>
                          <div><h6>Parmanent Address</h6>
                            <p>Rajshahi</p>
                          </div>
                      </td>
                      <td>+11722545455</td>
                      <td class="action">
                        <ul>
                          <li><a href="candidate-profile.php" target="blank" class="profile">View Profile</a></li>
                          <li><a href="#" class="success">Select for job</a></li>
                          <li><a href="message.php" class="message">Send Message</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>
                        <div class="name">
                          <h6>Name:</h6><p>Mst.Jinia Hoque</p>
                          <h6>Father Name:</h6><p>Md.Rasidul Hoque</p>
                        </div>
                      </td>
                      <td>
                        <div class="pro-image">
                          <img src="img/user1.png" alt="">
                        </div>
                      </td>
                      <td>
                          <div><h6>Present Address</h6>
                            <p>Dhanmondi 32,Dhaka</p>
                          </div>
                          <div><h6>Parmanent Address</h6>
                            <p>Rajshahi</p>
                          </div>
                      </td>
                      <td>+117255256</td>
                      <td class="action">
                        <ul>
                          <li><a href="candidate-profile.php" target="blank" class="profile">View Profile</a></li>
                          <li><a href="#" class="success">Select for job</a></li>
                          <li><a href="message.php" class="message">Send Message</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>
                        <div class="name">
                          <h6>Name:</h6><p>Md.Arian Islam</p>
                          <h6>Father Name:</h6><p>Md.Ariful Islam</p>
                        </div>
                      </td>
                      <td>
                        <div class="pro-image">
                          <img src="img/user2.png" alt="">
                        </div>
                      </td>
                      <td>
                          <div><h6>Present Address</h6>
                            <p>Mohammadpur,Dhaka</p>
                          </div>
                          <div><h6>Parmanent Address</h6>
                            <p>Kushtia</p>
                          </div>
                      </td>
                      <td>+215454551</td>
                      <td class="action">
                        <ul>
                          <li><a href="candidate-profile.php" target="blank" class="profile">View Profile</a></li>
                          <li><a href="#" class="success">Select for job</a></li>
                          <li><a href="message.php" class="message">Send Message</a></li>
                        </ul>
                      </td>
                    </tr>
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
