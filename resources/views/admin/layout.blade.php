<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome.all.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->


            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="{{ url('dashboard/') }}" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    Home Pages
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('dashboard/') }}" class="nav-link">
                                <i class="nav-icon fa fa-info-circle"></i>
                                <p>
                                    About
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('dashboard/') }}" class="nav-link">
                                <i class="nav-icon fab fa-servicestack"></i>
                                <p>
                                    Services
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('dashboard/') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Team
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard/') }}" class="nav-link">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>
                                    Contact
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard/') }}" class="nav-link">
                                <i class="nav-icon fas fa-thumbs-up"></i>
                                <p>
                                    Testimonials
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Content Wrapper. Contains page content -->
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
        @yield('modal')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src=" {{ asset('admin/js/jquery.js') }} "></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/js/bootstrap.bundle.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/js/adminlte.js') }}"></script>
    @yield('scripts')
</body>

</html>
