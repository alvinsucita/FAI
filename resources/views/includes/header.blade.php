<head>
    <link rel="stylesheet" href="haha.css">
    <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <meta id="meta-csrf" content="{{csrf_token()}}">
</head>


<body class="hold-transition skin-blue layout-top-nav">
    <!--div style="width: auto; height:10vh"-->

    <div class="wrapper">

        <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/"><img src="theluxegrad.png" class="navbar-brand"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/" style="color:#ffdb58;">Home</a></li>
                        <li><a href="/admin" style="color:#ffdb58">Admin</a></li>
                        <li><a href="/aboutus" style="color:#ffdb58">About Us</a></li>
                    </ul>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="/Register" style="color:#ffdb58">Register</a></li>
                        <li><a href="/Login" style="color:lightblue">Login</a></li>
                    </ul>
                </div>
            <!-- /.navbar-custom-menu -->
            </div>
        <!-- /.container-fluid -->
        </nav>
        </header>
        <!-- Full Width Column -->