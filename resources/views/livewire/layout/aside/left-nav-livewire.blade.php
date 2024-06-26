<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('landing') }}" class="brand-link">
            {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8"> --}}
            <span class="brand-text font-weight-light">Microi</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img @if (Auth::user()->profile_picture == '') src="{{ asset('face-0.jpg') }}"  @else src="{{ asset('assets/uploads/' . Auth::user()->profile_picture) }}" @endif
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('profile') }}" class="d-block">{{ Auth::user()->name }}
                        <span class="badge bg-success">{{ Auth::user()->role }}</span></a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('organisations') }}" class="nav-link">
                            <i class="nav-icon fa fa-car" aria-hidden="true"></i>
                            <p>
                                Organisations

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all.vehicles') }}" class="nav-link">
                            <i class="nav-icon fa fa-car" aria-hidden="true"></i>
                            <p>
                                Vehicles

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('invites') }}" class="nav-link">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <p>
                                Invites

                            </p>
                        </a>
                    </li>
                    @if (Auth::user()->role == 'systems admin')
                        <li class="nav-item">
                            <a href="{{ route('devices') }}" class="nav-link">
                                <i class="nav-icon fa fa-car" aria-hidden="true"></i>
                                <p>
                                    Devices

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users

                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout').submit();"
                            class="nav-link">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <p>
                                Logout
                                <form action="{{ route('logout') }}" method="post" id="logout">
                                    @csrf

                                </form>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

</div>
