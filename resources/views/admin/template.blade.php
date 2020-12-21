<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/plugins/pace/pace.min.css')}}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    {{-- edit warna disini --}}
    <body class="hold-transition skin-purple sidebar-mini sidebar-collapse">
        <div class="wrapper">
            @include('admin.header')
            <div class="content-wrapper">
                <section class="content-header">
                <h1>
                    Overview
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
                    <li class="active">
                        @yield('title')
                    </li>
                </ol>
                </section>
                <section class="content">
                    @yield('content')
                </section>
            </div>
            @include('admin.footer')

        </div>
        <script src="{{ url('/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/PACE/pace.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ url('/adminlte/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <script src="{{ url('/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ url('/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/chart.js/Chart.js') }}"></script>
        <script src="{{ url('/adminlte/dist/js/pages/dashboard2.js') }}"></script>
        <script src="{{ url('/adminlte/dist/js/demo.js') }}"></script>
        <script type="text/javascript">
            // To make Pace works on Ajax calls
            $(document).ajaxStart(function () {
                Pace.restart()
            })
            $('.ajax').click(function () {
                $.ajax({
                    url: '#', success: function (result) {
                        $('.ajax-content').html('<hr>Ajax Request Completed !')
                    }
                })
            })
            $('#barang').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        </script>
    </body>
</html>
