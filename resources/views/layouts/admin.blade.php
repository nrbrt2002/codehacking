<?php use Carbon\Carbon;  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/pp.css')}}" rel="stylesheet">

    <link href="{{asset('css/all.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




</head>

<body id="admin-page">


  <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="navbar-header">
              <a class="navbar-brand" href="#">Startmin</a>
          </div>

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <!-- Top Navigation: Left Menu -->
          <ul class="nav navbar-nav navbar-left navbar-top-links">
              <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
          </ul>

          <!-- Top Navigation: Right Menu -->
          <ul class="nav navbar-right navbar-top-links">
              <li class="dropdown navbar-inverse">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
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
                          <a class="text-center" href="#">
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                      </li>
                      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                  </ul>
              </li>
          </ul>

          <!-- Sidebar -->
          <div class="navbar-default sidebar" role="navigation" style='margin-top:55px'>
              <div class="sidebar-nav navbar-collapse">

                  <ul class="nav" id="side-menu">
                      <li class="sidebar-search">
                          <div class="input-group custom-search-form">
                              <input type="text" class="form-control" placeholder="Search...">
                                  <span class="input-group-btn">
                                      <button class="btn btn-primary" type="button">
                                          <i class="fa fa-search"></i>
                                      </button>
                                  </span>
                          </div>
                      </li>
                      <li>
                          <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                      </li>
                      <!-- users-->
                      <li>
                          <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href=""><i class="fa fa-users fa-fw"></i> All Users</a>
                                  <a href=""><i class="fa fa-plus fa-fw"></i> Add Users</a>
                              </li>
                          </ul>
                      </li>
                      <!-- other comment -->
                      <li>
                          <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="#">Second Level Item</a>
                              </li>
                              <li>
                                  <a href="#">Third Level <span class="fa arrow"></span></a>
                                  <ul class="nav nav-third-level">
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>

              </div>
          </div>
      </nav>



<br>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <br>
                @yield('content')
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/all.js')}}"></script>


@yield('footer')





</body>

</html>
