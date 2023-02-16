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
            <div class="row p-3 justify-content-center">
							@if ($message = Session::get('success'))
							<div class="col-md-6 alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>    
								<strong>{{ $message }}</strong>
							</div>
							@endif
							@if ($message = Session::get('error'))
							<div class="col-md-6 alert alert-danger alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>    
								<strong>{{ $message }}</strong>
							</div>
							@endif
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
                          <form action="{{url('addMagzine')}}" enctype="multipart/form-data" method="post">
                            @csrf
                          <div class="form-group row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Name*</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="name" placeholder="Name">
                                  <span class="text-danger">
                                    @error('name')
                                       {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Cover Image*</label>
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
                          </div>
                          <div class="form-group row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">URL*</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="url" placeholder="Url">
                                  <span class="text-danger">
                                    @error('url')
                                       {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pdf Folder Name*</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="folder" placeholder="Pdf Folder Name">
                                  <span class="text-danger">
                                    @error('folder')
                                       {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description*</label>
                            <div class="col-sm-10">
                              <textarea rows="5" cols="5" class="form-control" required placeholder="First Paragraph" name="description"></textarea>
                              <span class="text-danger">
                                @error('description')
                                   {{$message}}
                                @enderror
                              </span>
                            </div>
                          </div>
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn waves-effect waves-light btn-success rounded">Submit</button>
                          </div>
                          </form>
                          <table class="table yajra table-bordered my-3 table-sm">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Folder Name</th>
                                <th scope="col">URL</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php $a = 1; @endphp
                              @foreach ($data as $value)
                              <tr>
                                <th scope="row">{{$a++}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{strip_tags($value->description)}}</td>
                                <td><img src="images/{{$value->cover_image}}" style="height:60px"></td>
                                <td>{{$value->pdf_folder_name}}</td>
                                <td>{{$value->url}}</td>
                                <td>
                                  <div class="icons d-flex">
                                    <a type="button" class="editBtn" id="{{$value->id}}"><i class="far fa-edit" data-toggle="modal" data-target="#exampleModal"></i></a>
                                    <a href="deletemagzine/{{$value->id}}" onclick="return confirm('Are you sure you want to delete this item?')"><i class="far fa-trash-alt"></i></a>
                                  </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--Edit Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Magazine</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{url('updateMagzine')}}" enctype="multipart/form-data" method="post">
                                @csrf
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name*</label>
                                <div class="col-sm-9">
                                  <input type="hidden" name="pid" id="pid">
                                  <input type="text" name="names" id="names" class="form-control" placeholder="Name">
                                  <span class="text-danger">
                                    @error('names')
                                       {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Cover Image*</label>
                                <div class="col-sm-9">
                                  <input type="file" name="files" id="files" class="form-control" placeholder="Page Name">
                                  <span class="text-danger">
                                    @error('files')
                                       {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">URL*</label>
                                <div class="col-sm-9">
                                  <input type="text" name="urls" id="urls" class="form-control" placeholder="Name">
                                  <span class="text-danger">
                                    @error('urls')
                                       {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pdf Folder Name*</label>
                                <div class="col-sm-9">
                                  <input type="text" name="folders" id="folders" class="form-control" placeholder="Pdf Folder Name">
                                  <span class="text-danger">
                                    @error('folders')
                                       {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description*</label>
                                <div class="col-sm-9">
                                  <textarea rows="5" cols="5" class="form-control" placeholder="First Paragraph" name="descriptions" id="descriptions"></textarea>
                                  <span class="text-danger">
                                    @error('descriptions')
                                       {{$message}}
                                    @enderror
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
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
  <script>
    $(document).ready(function() {
      $('.editBtn').click(function(){
        var id = $(this).attr('id');
        // alert(id);
        $.ajax({
            url : 'getMagzineDetails',
            method : 'GET',
            data : {id : id},
            dataType : 'json',
            success : function(data){
               $('#pid').val(data.id);
               $('#names').val(data.name);
               $('#urls').val(data.url);
               $('#folders').val(data.pdf_folder_name);
               CKEDITOR.instances['descriptions'].setData(data.description)
            }
        });
      });
    });
  </script>
  <script type="text/javascript">
    @if(count($errors) > 0)
        $('#exampleModal').modal('show');
    @endif
    </script>
  <script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('descriptions');
  </script>
    <script>
      $(function () {
        var table = $('.yajra').DataTable({});
      });
    </script>
</body>

</html>