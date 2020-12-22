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
        <link rel="stylesheet" href="{{ url('/adminlte/plugins/pace/pace.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
            .example-modal .modal {
              position: relative;
              top: auto;
              bottom: auto;
              right: auto;
              left: auto;
              display: block;
              z-index: 1;
            }
            .example-modal .modal {
              background: transparent !important;
            }
          </style>
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
        <script src="{{ url('/adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ url('/adminlte/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <script src="{{ url('/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ url('/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/chart.js/Chart.js') }}"></script>
        <script src="{{ url('/adminlte/dist/js/pages/dashboard2.js') }}"></script>
        <script src="{{ url('/adminlte/dist/js/demo.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.select2').select2()
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
                $('#modal-delete').on('show.bs.modal', function(e) {
                    var bookId = $(e.relatedTarget).data('barang-id');
                    $(e.currentTarget).find('h4[class="balue"]').text(bookId);
                    $(e.currentTarget).find('a[id="id"]').attr("href", $(e.currentTarget).find('a[id="id"]').attr("href") + bookId);
                });
                $('#barang').DataTable()
                $('#users').DataTable()
                $('#trans').DataTable()
            });
        </script>
    </body>
</html>
