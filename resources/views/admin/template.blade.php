<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <body class="hold-transition skin-purple fixed sidebar-mini sidebar-collapse">
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
                $('#modal-update').on('show.bs.modal', function(e) {
                    var Id = $(e.relatedTarget).data('barang-id');
                    var req = "{!! url('/admin/barang/') !!}/"
                    var asdf = req.concat(Id)
                    $.get(asdf, function( data ) {
                        // alert( "Loaded: " + data.product_id );
                        $(e.currentTarget).find('input[id="decoy"]').val(data.product_id);
                        $(e.currentTarget).find('input[id="update_id"]').val(data.product_id);
                        $(e.currentTarget).find('select[id="update_category"]').val(data.category_id);
                        $(e.currentTarget).find('input[id="update_name"]').val(data.name);
                        $(e.currentTarget).find('input[id="update_price"]').val(data.harga);
                        $(e.currentTarget).find('input[id="update_stock"]').val(data.stok);
                        $(e.currentTarget).find('button[id="idd"]').attr("formaction", $(e.currentTarget).find('button[id="id"]').attr("formaction") + Id);
                    });
                });

                var prefix = $(this).find('a[id="id"]').attr("href");
                $('#modal-delete').on('show.bs.modal', function(e) {
                    var Id = $(e.relatedTarget).data('barang-id');
                    alert(Id);
                    $(e.currentTarget).find('h4[class="modal-title"]').text($(e.currentTarget).find('h4[class="modal-title"]').text().substring(0, 7) + Id);
                    $(e.currentTarget).find('a[id="id"]').attr("href", prefix);
                });
                //tampilan table
                $('#barang').DataTable()
                $('#users').DataTable()
                $('#trans').DataTable()
            });
            function logout(){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.post("{!! url('/admin/logout/') !!}", {_token: CSRF_TOKEN}, function(data) {
                    //asdf
                    location.reload();
                });
            }
        </script>
    </body>
</html>
