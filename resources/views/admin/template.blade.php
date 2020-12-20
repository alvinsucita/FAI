<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="adminlte/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="adminlte/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="adminlte/bower_components/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="adminlte/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    {{-- edit warna disini --}}
    <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        @include('admin.header')
        <div class="content-wrapper">
            <section class="content-header">
            <h1>
                Overview
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Overview</li>
            </ol>
            </section>
            <section class="content">
                @yield('content')
            </section>
        </div>
        @include('admin.footer')

    </div>
    <script src="adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="adminlte/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="adminlte/dist/js/adminlte.min.js"></script>
    <script src="adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="adminlte/bower_components/chart.js/Chart.js"></script>
    <script src="adminlte/dist/js/pages/dashboard2.js"></script>
    <script src="adminlte/dist/js/demo.js"></script>
    </body>
</html>
