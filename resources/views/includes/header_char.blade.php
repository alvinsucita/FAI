

<body class="hold-transition skin-blue layout-top-nav">
    <!--div style="width: auto; height:10vh"-->

    <div class="wrapper">

        <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/user"><img src="{{ url("/theluxegrad.png") }}" class="navbar-brand"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/user" style="color:#ffdb58;">Home</a></li>
                        <li><a href="/user/browse" style="color:#ffdb58">Browse</a></li>
                        <li><a href="/user/buy" style="color:#ffdb58">Buy</a></li>
                        <li><a href="/user/aboutus" style="color:#ffdb58">About Us</a></li>
                    </ul>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="/user/cart"><i class="fa fa-shopping-cart"></i>
                            @if($cart!="")
                                @if($count>0)
                                <span class="label label-danger">{{count($count)-1}}</span>
                                @endif
                            @endif
                        </a></li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ url("/profile_picture.jpg") }}" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{$user->username}}</span>
                            </a>
                            <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header bg-navy">
                                <img src="{{ url("/profile_picture.jpg") }}" class="img-circle" alt="User Image">

                                <p>
                                    {{$user->username}} - Buyer
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                <div class="col-xs-6 text-center">
                                    <a href="/user/history">History Pesanan</a>
                                </div>
                                <!--div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div-->
                                <div class="col-xs-6 text-center">
                                    <a href="/user/status">Status Pesanan</a>
                                </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                <a href="/user/edit_profile" class="btn btn-default btn-flat">Edit Profile</a>
                                </div>
                                <div class="pull-right">
                                <a href="/logout" class="btn btn-default btn-flat">Log out</a>
                                </div>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <!-- /.navbar-custom-menu -->
            </div>
        <!-- /.container-fluid -->
        </nav>
        </header>
        <!-- Full Width Column -->
