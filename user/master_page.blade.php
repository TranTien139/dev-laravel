<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin-@yield("title")</title>
    <link href="{{ asset('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/bower_components/metisMenu/dist/metisMenu.min.css') }}"rel="stylesheet">
    <link href="{{ asset('public/admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/admin/css/style_admin.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/admin/css/jquery.datepicker.css') }}" >
    <script src="{{ asset('public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/admin/ckfinder/ckfinder.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/admin/ckeditor/ckeditor.js') }}"></script>
</head>
<body>
        @if(!Auth::check())
        <div class="errror-login">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        <div class="container">
             <div class="row admin_dangnhap ">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                    <div class="panel-heading heading-login">
                        <h3 class="panel-title">Đăng Nhập Vào Trang Quản Trị</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{!! route('postlogin') !!}" method="POST">
                            <fieldset>
                            <input type = "hidden" name="_token" value = "{!! csrf_token() !!}" >
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="txtemail" value="{{ old('txtemail') }}" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="txtpassword" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input name="txtrememberme" type="checkbox" value="">&nbsp;Remember me
                                </div>
                                <div class="form-group">
                                    <a href="#">Quên Mật Khẩu</a>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
         </div>
     </div>
     @elseif(Auth::user()->level=='admin')
    <div id="wrapper">   
        <!-- Navigation -->
        <nav class="navbar nav-top navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand img_profile" href="{!! url('admin/profile') !!}"><img src="{!! Auth::user()->avatar !!}" style="width:30px; height:30px; margin-top:-5px; border-radius:50%; "  class=" img-responsive"><span class="name_profile">{!! Auth::user()->fullname; !!}</span></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <li><a href="" data-toggle="modal" data-target="#ModalChagepass"><i class="fa fa-gear fa-fw" ></i>Đổi Mật Khẩu</a>
                        </li>
                        <li><a href="{!! url('admin/setting') !!}"><i class="fa fa-gear fa-fw"></i>Cài Đặt</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{!! url('admin/logout') !!}"><i class="fa fa-sign-out fa-fw"></i>Đăng Xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar sidebar-left" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{!! url('admin') !!}"><i class="fa fa-dashboard fa-fw"></i> Trang quản trị</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Tài Khoản<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!  url('admin/user') !!}">Danh Sách Tài Khoản</a>
                                </li>
                                 <li>
                                    <a href="{!! url('admin/user/create') !!}">Thêm Tài Khoản</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Bài Báo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!  url('admin/article') !!}">Danh Sách Bài Báo</a>
                                </li>
                                 <li>
                                    <a href="{!! url('admin/article/create') !!}">Thêm Bài Báo</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Loại Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!  url('admin/category') !!}">Danh Sách Loại Sản Phẩm</a>
                                </li>
                                 <li>
                                    <a href="{!! url('admin/category/create') !!}">Thêm Loại Sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!  url('admin/product') !!}">Danh Sách Sản Phẩm</a>
                                </li>
                                 <li>
                                    <a href="{!! url('admin/product/create') !!}">Thêm Sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Slide<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!  url('admin/slider') !!}">Danh Sách Slide</a>
                                </li>
                                 <li>
                                    <a href="{!! url('admin/slider/create') !!}">Thêm Slide</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Khối Block<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!  url('admin/block') !!}">Thông Tin Khối Block</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 col-md-12">
                <div class="errror-login">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                </div>

               @if(Session::has('flash_message'))
              <div class="alert alert_message alert-success">
                {{ Session::get('flash_message') }}
              </div>
               @endif
             </div>
                 @yield("content_admin")
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    

    <!-- Modal Change password -->
<div class="modal fade" id="ModalChagepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thay Đổi Mật Khẩu</h4>
      </div>
      <div class="modal-body">
    
         {{ Form::open(array('url'=>'admin/getchangepassword', 'class'=>'block small center login')) }}
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
        <input type = "hidden" name="txtid" value = "{!! Auth::user()->id !!}" >
        <input type = "hidden" name="txtemail" value = "{!! Auth::user()->email !!}" >
        <input type = "hidden" name="txtfullname" value = "{!! Auth::user()->fullname !!}" >
        <input type = "hidden" name="txtbirthday" value = "{!! Auth::user()->birthday !!}" >
        <input type = "hidden" name="txtgender" value = "{!! Auth::user()->gender !!}" >
        <input type = "hidden" name="txtlevel" value = "{!! Auth::user()->level !!}" >
         <input type = "hidden" name="txtavatar" value = "{!! Auth::user()->avatar !!}" >
    <div class="form-group">
    {{ Form::password('txtold_password', array('class'=>'form-control', 'placeholder'=>'Mật Khẩu Cũ')) }}
    </div>
    <div class="form-group">
    {{ Form::password('txtchangepassword', array('class'=>'form-control', 'placeholder'=>'Mật Khẩu Mới')) }}
    </div>
    <div class="form-group">
    {{ Form::password('txtconfirm_new_password', array('class'=>'form-control', 'placeholder'=>'Nhập Lại Mật Khẩu Mới')) }}
    </div>
    <div class="form-group">
    {{ Form::submit('Lưu Thay Đổi', array('class'=>'btn btn-primary'))}}
    </div>
     {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
       <script src="{{ asset('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/admin/js/jquery.datepicker.min.js') }}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('public/admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/admin/dist/js/sb-admin-2.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('public/admin/bower_components/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/admin/js/customjs_admin.js') }}"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: false
        });
    });
    </script>
@else
ban khong vao duoc trang nay
@endif
</body>
</html>

