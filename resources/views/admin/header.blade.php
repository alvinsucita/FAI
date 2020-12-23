    {{-- termasuk sidebar --}}
    <header class="main-header">
        <a href="#" class="logo">
            <span class="logo-mini"><b>L</b>C</span>
            <span class="logo-lg"><b>Luxe</b>Culture</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a onclick="logout()">
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header">MASTER</li>
                    <li class="treeview">
                        <a href="{{ url('/admin') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ url('/admin/user') }}">
                            <i class="fa fa-users"></i> <span>Users</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ url('/admin/barang') }}">
                            <i class="fa fa-tag"></i> <span>Products</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ url('/admin/trans') }}">
                            <i class="fa fa-shopping-cart"></i> <span>Transactions</span>
                        </a>
                    </li>
                </li>
            </ul>
        </section>
    </aside>
