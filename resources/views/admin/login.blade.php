<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>hmmm...</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ url('/adminlte/plugins/iCheck/square/blue.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            {{-- <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div> --}}
            <!-- /.login-logo -->
            <div class="login-box-body">
            {{-- <p class="login-box-msg">Sign in to start your session</p> --}}

                <form action="{{ url('/admin/login') }}" method="post">
                    @csrf
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            {{-- <div class="checkbox icheck">
                                <label>
                                <input type="checkbox"> Remember Me
                                </label>
                            </div> --}}
                            <div>
                                <a href="{{ url('/') }}">Back to Home</a>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <script src="{{ url('/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ url('/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
        $(function () {
            $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
            });
        });
        </script>
    </body>
</html>
