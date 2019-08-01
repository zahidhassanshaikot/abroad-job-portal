<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Company Dashboard</title>

@include('layouts/header/dashboard-header')
@include('layouts/sidebar/sidebar')

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

              </div>
            </div><!-- /.section-content -->
          </div>
        </div>
      </div><!-- /.contents-inner -->
      @include('layouts/footer/footer')






  <script src="{{asset('design')}}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{asset('design')}}/assets/js/plugins.js"></script>
  <script src="{{asset('design')}}/assets/js/index/index-01.js"></script>
  <script src="{{asset('design')}}/assets/js/main.js"></script>

</body>

</html>