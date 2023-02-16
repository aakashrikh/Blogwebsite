<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('head')
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
                      <h5 class="m-b-10">New Content</h5>
                      <!-- <p class="m-b-0">Welcome to Material Able</p> -->
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{url('index')}}"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">New Content</a>
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
                          <h5>New Content</h5>
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
                          <form action="{{url('add_content')}}" enctype="multipart/form-data" method="post">
                          @csrf
                          <div class="form-group row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Page Name*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="page_name" class="form-control" placeholder="Page Name">
                                  <span class="text-danger">
                                    @error('page_name')
                                      {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Page Title*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="page_title" class="form-control" placeholder="Page Title">
                                  <span class="text-danger">
                                    @error('page_title')
                                      {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Category Name</label>
                                <div class="col-sm-8">
                                  <select name="category" id="category" class="form-control">
                                    <option value="">Select One Value Only</option>
                                    @foreach ($data as $value)
                                        <option value="{{$value -> id}}">{{$value -> name}}</option>
                                    @endforeach
                                  </select>
                                  <span class="text-danger">
                                    @error('category')
                                      {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Author Name*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="author_name" class="form-control" placeholder="Author Name">
                                  <span class="text-danger">
                                    @error('author_name')
                                      {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">First Paragraph*</label>
                            <div class="col-sm-10">
                              <textarea rows="5" cols="5" name="first_paragraph" class="form-control" placeholder="First Paragraph"></textarea>
                              <span class="text-danger">
                                @error('first_paragraph')
                                  {{$message}}
                                @enderror
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description*</label>
                            <div class="col-sm-10">
                              <textarea rows="5" cols="5" name="description" class="form-control" placeholder="First Paragraph"></textarea>
                              <span class="text-danger">
                                @error('description')
                                  {{$message}}
                                @enderror
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Upload Image*</label>
                                <div class="col-sm-8">
                                  <input type="file" name="file" class="form-control" placeholder="Page Name">
                                  <span class="text-danger">
                                    @error('file')
                                      {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image Text*</label>
                                <div class="col-sm-9">
                                  <input type="text" name="image_text" class="form-control" placeholder="Image Text">
                                  <span class="text-danger">
                                    @error('image_text')
                                      {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Meta Title*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
                                  <span class="text-danger">
                                    @error('meta_title')
                                      {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Meta keyword*</label>
                                <div class="col-sm-9">
                                  <input type="text" name="meta_keyword" class="form-control" placeholder="Meta keyword">
                                  <span class="text-danger">
                                    @error('meta_keyword')
                                      {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Meta Description*</label>
                            <div class="col-sm-10">
                              <textarea rows="5" name="meta_description" cols="5" class="form-control" placeholder="Meta Description"></textarea>
                              <span class="text-danger">
                                @error('meta_description')
                                  {{$message}}
                                @enderror
                              </span>
                            </div>
                          </div>
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn waves-effect waves-light btn-success rounded">Submit</button>
                          </div>
                          </form>
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
  <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
  <!-- waves js -->
  <script src="assets/pages/waves/js/waves.min.js"></script>
  <!-- jquery slimscroll js -->
  <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
  <!-- slimscroll js -->
  <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- menu js -->
  <script src="assets/js/pcoded.min.js"></script>
  <script src="assets/js/vertical/vertical-layout.min.js"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>

  <script>
    CKEDITOR.replace('description');
  </script>
  <script>
    $(document).ready(function() {
      $('#category').change(function() {
        var id = $('#category').children(":selected").attr('value');
        $.ajax({
            url : 'getCategoryDetails',
            method : 'GET',
            data : {id : id},
            dataType : 'json',
            success : function(data){
               $('#meta_title').val(data.meta_title);
               $('#meta_keyword').val(data.meta_keyword);
               $('#meta_description').val(data.meta_description);
            }
        });
      });
    })
  </script>
</body>

</html>