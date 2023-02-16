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
                    <a href="{{url('login')}}">
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
                      <h5 class="m-b-10">Pages Content</h5>
                      <!-- <p class="m-b-0">Welcome to Material Able</p> -->
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{url('index')}}"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Pages Content</a>
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
                    <div class="col-xl-12 col-md-12">
                      <div class="card table-card">
                        <div class="card-header">
                          <h5>Pages Content</h5>
                          <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                              <li><i class="fa fa fa-wrench open-card-option"></i></li>
                              <li><i class="fa fa-window-maximize full-card"></i></li>
                              <li><i class="fa fa-minus minimize-card"></i></li>
                              <li><i class="fa fa-refresh reload-card"></i></li>
                              <li><i class="fa fa-trash close-card"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-block px-5 py-4">
                          <table class="table table-bordered my-3 table-sm" style="display: block;overflow-x: auto;white-space: nowrap;">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Page Title</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Meta Title</th>
                                <th scope="col">Meta Keyword</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>About Us</td>
                                <td>About Us</td>
                                <td>Scientific India magazine provides you with everything you need t</td>
                                <td><img src="assets/images/students-2.jpg" style="height:60px"></td>
                                <td>About Scientific India magazine</td>
                                <td>Scientific India magazine, Science Magazine, Science, Technology, Health <br>Science, Environmental Science, Space, Nature, National Security</td>
                                <td>Scientific India magazine provides you with everything you need to know about what's<br> new and what's next in Science, Technology, Health Science, <br>Environmental Science, Space, Nature, National Security and much more.<br> Each issue of Scientific India magazine</td>
                                <td>
                                  <div class="icons d-flex">
                                      <a href="#"><i class="far fa-edit" data-toggle="modal" data-target="#exampleModal"></i></a>
                                    <a href="#" onclick="return confirm('Are you sure you want to delete this item?')"><i class="far fa-trash-alt"></i></a>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                              <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                      <!--Edit Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Page</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Page Title*</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" required placeholder="Page Title">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Type*</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" required placeholder="Type">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description*</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" required placeholder="Description">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Image*</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" required placeholder="Page Title">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Meta Title*</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" required placeholder="Meta Title">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Meta Keyword*</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" required placeholder="Meta Keyword">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Meta Description*</label>
                                <div class="col-sm-10">
                                  <textarea rows="5" cols="5" class="form-control" required placeholder="Meta Description"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
  <!-- Required Jquery -->
  @include("scripts")
</body>

</html>