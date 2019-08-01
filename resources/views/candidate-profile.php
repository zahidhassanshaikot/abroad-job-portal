<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Job Seeker Profile</title>


    <?php include 'header/dashboard-header.php'; ?>

    <?php include 'sidebar/admin-sidebar2.php'; ?>

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-md-12">
            <div class="section-content profile-dashboard">
              <div class="content-head">
                <div class="profile-image">
                  <img src="img/profile.jpg" alt="profile">
                  <span><a href="#">Edit Picture</a></span>
                </div>
                <div class="profile-info">
                  <h2 class="name">John Deo</h2>
                  <h5 class="email">John@gmail.com</h5>
                </div>
              </div>
              <div class="profile-tab">
                <ul  class="nav nav-pills">
            			<li class="active">
                    <a  href="#profile" data-toggle="tab">Profile</a>
            			</li>
            			<li><a href="#apply-job" data-toggle="tab">Applied Jobs</a>
            			</li>
            			<li><a href="#change-password" data-toggle="tab">Change Password</a>
            			</li>
            		</ul>
                <div class="tab-content clearfix">
                  <div class="tab-pane active" id="profile">
                    <div class="matter">
                      <div class="title">
                        <h4>Education</h4>
                      </div>
                      <div class="ab-entity">
                        <h6>Daffodil International University</h6>
                        <div class="duration">
                          <p>2015-2019</p>
                        </div>
                      </div>
                    </div>
          				</div>
                  <div class="tab-pane" id="apply-job">
                    <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
          				</div>
                  <div class="tab-pane" id="change-password">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          				</div>
                </div>
              </div>


              <div class="content-details show">
                <div class="card">
                  <div class="card-body card-block">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="applier-info">
                          <div class="info-title">
                            <h4 class="">My Data</h4>
                          </div>
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <td>Email Address</td>
                                <td>john@gmail.com</td>
                              </tr>
                              <tr>
                                <td>Fisrt Name</td>
                                <td>John</td>
                              </tr>
                              <tr>
                                <td>Last Name</td>
                                <td>Deo</td>
                              </tr>
                              <tr>
                                <td>Phone</td>
                                <td>012545</td>
                              </tr>
                              <tr>
                                <td>Nationality</td>
                                <td>Bangladeshi</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      <div class="my-application">
                        <div class="info-title">
                          <h4>My Applications</h4>
                        </div>
                        <div class="apply-info">
                          <p>You don,t have applied for any jobs</p>
                        </div>
                      </div>

                      <div class="save-job">
                        <div class="info-title">
                          <h4>My Saved Job</h4>
                        </div>
                        <div class="save-jobs-info">
                          <ul>
                            <li><a href="#">German B2B Customer Service Representative</a> </li>
                            <li><a href="#">Commercial Officer</a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->

      <?php include 'footer/footer.php'; ?>



  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/forms/chosen.jquery.min.js"></script>
  <script src="assets/js/main.js"></script>

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
