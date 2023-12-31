<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                @auth
                    <span class="d-block">{{ Auth::user()->name }}</span>
                    <span class="text-sm text-primary">{{ Auth::user()->is_admin ? 'Admin' : 'Not Admin' }}</span>
                @endauth
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-item mb-2">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>
                @auth
                    @if (Auth::user()->is_admin)
                        <li class="nav-item mb-2">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Data User
                                </p>
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
