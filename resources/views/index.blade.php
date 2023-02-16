<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include("head")
<body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
    <div class="loader-track">
      <div class="preloader-wrapper">
        <div class="spinner-layer spinner-blue">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
        <div class="spinner-layer spinner-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
        <div class="spinner-layer spinner-yellow">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
        <div class="spinner-layer spinner-green">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
          <div class="navbar-logo">
            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
              <i class="ti-menu"></i>
            </a>
            <div class="mobile-search waves-effect waves-light">
              <div class="header-search">
                <div class="main-search morphsearch-search">
                  <div class="input-group">
                    <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                    <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <a href="{{url('index')}}" class=" mobile-logo-new">
              <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-options waves-effect waves-light">
              <i class="ti-more"></i>
            </a>
          </div>
          <div class="navbar-container container-fluid">
            <ul class="nav-left">
              <li>
                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                </div>
              </li>
              <li>
                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                  <i class="ti-fullscreen"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="user-profile header-notification">
                <!-- <a href="#!" class="waves-effect waves-light"> -->
                <span>Admin</span>
                <i class="ti-angle-down"></i>
                </a>
                <ul class="show-notification profile-notification">
                  <li class="waves-effect waves-light">
                    <a href="{{url('signout')}}">
                      <i class="ti-layout-sidebar-left"></i> Logout
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            </ul>
          </div>
        </div>
      </nav>
      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            @include("sidebar")
          </nav>
          <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
              <div class="page-block">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <div class="page-header-title">
                      <h5 class="m-b-10">Dashboard</h5>
                      <!-- <p class="m-b-0">Welcome to Material Able</p> -->
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
              <!-- Main-body start -->
              <div class="main-body">
                <div class="page-wrapper">
                  <!-- Page-body start -->
                  <div class="page-body">
                    <div class="row">
                      <!-- Material statustic card start -->
                      <div class="col-xl-4 col-md-12">
                        <div class="card mat-stat-card">
                          <div class="card-block">
                            <div class="row align-items-center b-b-default">
                              <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                <div class="row align-items-center text-center">
                                  <div class="col-4 p-r-0">
                                    <i class="far fa-user text-c-purple f-24"></i>
                                  </div>
                                  <div class="col-8 p-l-0">
                                    <h5>10K</h5>
                                    <p class="text-muted m-b-0">Visitors</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 p-b-20 p-t-20">
                                <div class="row align-items-center text-center">
                                  <div class="col-4 p-r-0">
                                    <i class="fas fa-volume-down text-c-green f-24"></i>
                                  </div>
                                  <div class="col-8 p-l-0">
                                    <h5>100%</h5>
                                    <p class="text-muted m-b-0">Volume</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row align-items-center">
                              <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                <div class="row align-items-center text-center">
                                  <div class="col-4 p-r-0">
                                    <i class="far fa-file-alt text-c-red f-24"></i>
                                  </div>
                                  <div class="col-8 p-l-0">
                                    <h5>2000+</h5>
                                    <p class="text-muted m-b-0">Files</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 p-b-20 p-t-20">
                                <div class="row align-items-center text-center">
                                  <div class="col-4 p-r-0">
                                    <i class="far fa-envelope-open text-c-blue f-24"></i>
                                  </div>
                                  <div class="col-8 p-l-0">
                                    <h5>120</h5>
                                    <p class="text-muted m-b-0">Mails</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-md-12">
                        <div class="card mat-stat-card">
                          <div class="card-block">
                            <div class="row align-items-center b-b-default">
                              <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                <div class="row align-items-center text-center">
                                  <div class="col-4 p-r-0">
                                    <i class="fas fa-share-alt text-c-purple f-24"></i>
                                  </div>
                                  <div class="col-8 p-l-0">
                                    <h5>1000</h5>
                                    <p class="text-muted m-b-0">Share</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 p-b-20 p-t-20">
                                <div class="row align-items-center text-center">
                                  <div class="col-4 p-r-0">
                                    <i class="fas fa-sitemap text-c-green f-24"></i>
                                  </div>
                                  <div class="col-8 p-l-0">
                                    <h5>600</h5>
                                    <p class="text-muted m-b-0">Network</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row align-items-center">
                              <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                <div class="row align-items-center text-center">
                                  <div class="col-4 p-r-0">
                                    <i class="fas fa-signal text-c-red f-24"></i>
                                  </div>
                                  <div class="col-8 p-l-0">
                                    <h5>350</h5>
                                    <p class="text-muted m-b-0">Returns</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 p-b-20 p-t-20">
                                <div class="row align-items-center text-center">
                                  <div class="col-4 p-r-0">
                                    <i class="fas fa-wifi text-c-blue f-24"></i>
                                  </div>
                                  <div class="col-8 p-l-0">
                                    <h5>100%</h5>
                                    <p class="text-muted m-b-0">Connections</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-md-12">
                        <div class="card mat-clr-stat-card text-white green ">
                          <div class="card-block">
                            <div class="row">
                              <div class="col-3 text-center bg-c-green">
                                <i class="fas fa-star mat-icon f-24"></i>
                              </div>
                              <div class="col-9 cst-cont">
                                <h5>4000+</h5>
                                <p class="m-b-0">Ratings Received</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card mat-clr-stat-card text-white blue">
                          <div class="card-block">
                            <div class="row">
                              <div class="col-3 text-center bg-c-blue">
                                <i class="fas fa-trophy mat-icon f-24"></i>
                              </div>
                              <div class="col-9 cst-cont">
                                <h5>17</h5>
                                <p class="m-b-0">Achievements</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Material statustic card end -->
                      <!-- order-visitor start -->
                      <!-- order-visitor end -->
                    </div>
                  </div>
                  <!-- Page-body end -->
                </div>
                <div id="styleSelector"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include("scripts")
</body>

</html>