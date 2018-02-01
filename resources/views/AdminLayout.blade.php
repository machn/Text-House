<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Text House</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css">-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/onsen/2.8.3/css/ionicons/css/ionicons.min.css" />
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-9/css/ionicons.min.css">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionic/1.3.1/css/ionic.min.css" />--}}

    {{--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="  {{ URL::asset('css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="  {{ URL::asset('css/select2.min.css') }}">

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                                                          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="  {{ URL::asset('css/skin-blue.min.css') }}">

    <link rel="stylesheet" href="  {{ URL::asset('css/icheck-blue.css') }}">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>XT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>TEXT</b>HOUSE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <!--<div class="navbar-custom-menu">-->
            <!--<ul class="nav navbar-nav">-->
            <!--&lt;!&ndash; Messages: style can be found in dropdown.less&ndash;&gt;-->
            <!--<li class="dropdown messages-menu">-->
            <!--&lt;!&ndash; Menu toggle button &ndash;&gt;-->
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
            <!--<i class="fa fa-envelope-o"></i>-->
            <!--<span class="label label-success">4</span>-->
            <!--</a>-->
            <!--<ul class="dropdown-menu">-->
            <!--<li class="header">You have 4 messages</li>-->
            <!--<li>-->
            <!--&lt;!&ndash; inner menu: contains the messages &ndash;&gt;-->
            <!--<ul class="menu">-->
            <!--<li>&lt;!&ndash; start message &ndash;&gt;-->
            <!--<a href="#">-->
            <!--<div class="pull-left">-->
            <!--&lt;!&ndash; User Image &ndash;&gt;-->
            <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
            <!--</div>-->
            <!--&lt;!&ndash; Message title and timestamp &ndash;&gt;-->
            <!--<h4>-->
            <!--Support Team-->
            <!--<small><i class="fa fa-clock-o"></i> 5 mins</small>-->
            <!--</h4>-->
            <!--&lt;!&ndash; The message &ndash;&gt;-->
            <!--<p>Why not buy a new awesome theme?</p>-->
            <!--</a>-->
            <!--</li>-->
            <!--&lt;!&ndash; end message &ndash;&gt;-->
            <!--</ul>-->
            <!--&lt;!&ndash; /.menu &ndash;&gt;-->
            <!--</li>-->
            <!--<li class="footer"><a href="#">See All Messages</a></li>-->
            <!--</ul>-->
            <!--</li>-->
            <!--&lt;!&ndash; /.messages-menu &ndash;&gt;-->

            <!--&lt;!&ndash; Notifications Menu &ndash;&gt;-->
            <!--<li class="dropdown notifications-menu">-->
            <!--&lt;!&ndash; Menu toggle button &ndash;&gt;-->
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
            <!--<i class="fa fa-bell-o"></i>-->
            <!--<span class="label label-warning">10</span>-->
            <!--</a>-->
            <!--<ul class="dropdown-menu">-->
            <!--<li class="header">You have 10 notifications</li>-->
            <!--<li>-->
            <!--&lt;!&ndash; Inner Menu: contains the notifications &ndash;&gt;-->
            <!--<ul class="menu">-->
            <!--<li>&lt;!&ndash; start notification &ndash;&gt;-->
            <!--<a href="#">-->
            <!--<i class="fa fa-users text-aqua"></i> 5 new members joined today-->
            <!--</a>-->
            <!--</li>-->
            <!--&lt;!&ndash; end notification &ndash;&gt;-->
            <!--</ul>-->
            <!--</li>-->
            <!--<li class="footer"><a href="#">View all</a></li>-->
            <!--</ul>-->
            <!--</li>-->
            <!--&lt;!&ndash; Tasks Menu &ndash;&gt;-->
            <!--<li class="dropdown tasks-menu">-->
            <!--&lt;!&ndash; Menu Toggle Button &ndash;&gt;-->
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
            <!--<i class="fa fa-flag-o"></i>-->
            <!--<span class="label label-danger">9</span>-->
            <!--</a>-->
            <!--<ul class="dropdown-menu">-->
            <!--<li class="header">You have 9 tasks</li>-->
            <!--<li>-->
            <!--&lt;!&ndash; Inner menu: contains the tasks &ndash;&gt;-->
            <!--<ul class="menu">-->
            <!--<li>&lt;!&ndash; Task item &ndash;&gt;-->
            <!--<a href="#">-->
            <!--&lt;!&ndash; Task title and progress text &ndash;&gt;-->
            <!--<h3>-->
            <!--Design some buttons-->
            <!--<small class="pull-right">20%</small>-->
            <!--</h3>-->
            <!--&lt;!&ndash; The progress bar &ndash;&gt;-->
            <!--<div class="progress xs">-->
            <!--&lt;!&ndash; Change the css width attribute to simulate progress &ndash;&gt;-->
            <!--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"-->
            <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
            <!--<span class="sr-only">20% Complete</span>-->
            <!--</div>-->
            <!--</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--&lt;!&ndash; end task item &ndash;&gt;-->
            <!--</ul>-->
            <!--</li>-->
            <!--<li class="footer">-->
            <!--<a href="#">View all tasks</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</li>-->
            <!--&lt;!&ndash; User Account Menu &ndash;&gt;-->
            <!--<li class="dropdown user user-menu">-->
            <!--&lt;!&ndash; Menu Toggle Button &ndash;&gt;-->
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
            <!--&lt;!&ndash; The user image in the navbar&ndash;&gt;-->
            <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
            <!--&lt;!&ndash; hidden-xs hides the username on small devices so only the image appears. &ndash;&gt;-->
            <!--<span class="hidden-xs">Alexander Pierce</span>-->
            <!--</a>-->
            <!--<ul class="dropdown-menu">-->
            <!--&lt;!&ndash; The user image in the menu &ndash;&gt;-->
            <!--<li class="user-header">-->
            <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

            <!--<p>-->
            <!--Alexander Pierce - Web Developer-->
            <!--<small>Member since Nov. 2012</small>-->
            <!--</p>-->
            <!--</li>-->
            <!--&lt;!&ndash; Menu Body &ndash;&gt;-->
            <!--<li class="user-body">-->
            <!--<div class="row">-->
            <!--<div class="col-xs-4 text-center">-->
            <!--<a href="#">Followers</a>-->
            <!--</div>-->
            <!--<div class="col-xs-4 text-center">-->
            <!--<a href="#">Sales</a>-->
            <!--</div>-->
            <!--<div class="col-xs-4 text-center">-->
            <!--<a href="#">Friends</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.row &ndash;&gt;-->
            <!--</li>-->
            <!--&lt;!&ndash; Menu Footer&ndash;&gt;-->
            <!--<li class="user-footer">-->
            <!--<div class="pull-left">-->
            <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
            <!--</div>-->
            <!--<div class="pull-right">-->
            <!--<a href="#" class="btn btn-default btn-flat">Sign out</a>-->
            <!--</div>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</li>-->
            <!--&lt;!&ndash; Control Sidebar Toggle Button &ndash;&gt;-->
            <!--<li>-->
            <!--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</div>-->
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    {{--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
                </div>
                <div class="pull-left info">
                {{--<p>User</p>--}}
                <!-- Status -->
                    {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="{{ url('admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ url('admin/enterprise')}}"><i class="fa fa-users"></i> <span>Enterprise</span></a></li>
                <li><a href="{{ url('admin/register-enterprise')}}"><i class="fa fa-users"></i> <span>Create User</span></a></li>
                <li><a href="{{ url('admin/log')}}"><i class="fa fa-envelope"></i> <span>Log</span></a></li>
                <li><a href="{{ url('admin/account')}}"><i class="fa fa-database"></i> <span>Account</span></a></li>

                {{--<li class="treeview">--}}
                {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
                {{--<span class="pull-right-container">--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
                {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @yield('content')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!--&lt;!&ndash; Control Sidebar &ndash;&gt;-->
    <!--<aside class="control-sidebar control-sidebar-dark">-->
    <!--&lt;!&ndash; Create the tabs &ndash;&gt;-->
    <!--<ul class="nav nav-tabs nav-justified control-sidebar-tabs">-->
    <!--<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>-->
    <!--<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>-->
    <!--</ul>-->
    <!--&lt;!&ndash; Tab panes &ndash;&gt;-->
    <!--<div class="tab-content">-->
    <!--&lt;!&ndash; Home tab content &ndash;&gt;-->
    <!--<div class="tab-pane active" id="control-sidebar-home-tab">-->
    <!--<h3 class="control-sidebar-heading">Recent Activity</h3>-->
    <!--<ul class="control-sidebar-menu">-->
    <!--<li>-->
    <!--<a href="javascript:;">-->
    <!--<i class="menu-icon fa fa-birthday-cake bg-red"></i>-->

    <!--<div class="menu-info">-->
    <!--<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>-->

    <!--<p>Will be 23 on April 24th</p>-->
    <!--</div>-->
    <!--</a>-->
    <!--</li>-->
    <!--</ul>-->
    <!--&lt;!&ndash; /.control-sidebar-menu &ndash;&gt;-->

    <!--<h3 class="control-sidebar-heading">Tasks Progress</h3>-->
    <!--<ul class="control-sidebar-menu">-->
    <!--<li>-->
    <!--<a href="javascript:;">-->
    <!--<h4 class="control-sidebar-subheading">-->
    <!--Custom Template Design-->
    <!--<span class="pull-right-container">-->
    <!--<span class="label label-danger pull-right">70%</span>-->
    <!--</span>-->
    <!--</h4>-->

    <!--<div class="progress progress-xxs">-->
    <!--<div class="progress-bar progress-bar-danger" style="width: 70%"></div>-->
    <!--</div>-->
    <!--</a>-->
    <!--</li>-->
    <!--</ul>-->
    <!--&lt;!&ndash; /.control-sidebar-menu &ndash;&gt;-->

    <!--</div>-->
    <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
    <!--&lt;!&ndash; Stats tab content &ndash;&gt;-->
    <!--<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>-->
    <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
    <!--&lt;!&ndash; Settings tab content &ndash;&gt;-->
    <!--<div class="tab-pane" id="control-sidebar-settings-tab">-->
    <!--<form method="post">-->
    <!--<h3 class="control-sidebar-heading">General Settings</h3>-->

    <!--<div class="form-group">-->
    <!--<label class="control-sidebar-subheading">-->
    <!--Report panel usage-->
    <!--<input type="checkbox" class="pull-right" checked>-->
    <!--</label>-->

    <!--<p>-->
    <!--Some information about this general settings option-->
    <!--</p>-->
    <!--</div>-->
    <!--&lt;!&ndash; /.form-group &ndash;&gt;-->
    <!--</form>-->
    <!--</div>-->
    <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
    <!--</div>-->
    <!--</aside>-->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <!--<div class="control-sidebar-bg"></div>-->
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('js/select2.full.min.js') }}"></script>

<script src="{{ URL::asset('js/adminlte.min.js') }}"></script>

<script src="{{ URL::asset('js/icheck.min.js') }}"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        // //Datemask dd/mm/yyyy
        // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        // //Datemask2 mm/dd/yyyy
        // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        // //Money Euro
        // $('[data-mask]').inputmask()


        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //Date picker
        $('#datepicker2').datepicker({
            autoclose: true
        })


        //Timepicker
        $('#timepicker').timepicker({
            showInputs: false
        })

//Timepicker
        $('#timepicker2').timepicker({
            showInputs: false
        })

    })
</script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>


</html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

