<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/admin/assets/images/logo.svg')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/admin/assets/images/logo-light.png')}}" alt="" height="17">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">Hi, {{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item text-danger" href="{{route('admin.logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                
                <li>
                    <a href="{{route('admin.daftar-calon-siswa.index')}}" class="nav-link {{ (request()->is('admin/daftar-calon-siswa*')) ? 'mm-active' : '' }}" href="{{ route('admin.daftar-calon-siswa.index') }}">
                        <i class='bx bxs-graduation'></i>
                        <span>Daftar Calon Siswa</span>
                    </a>
                </li>
                
                {{-- <li>
                    <a href="{{route('admin.kuesioner')}}" class="nav-link {{ (request()->is('admin/kuesioner*')) ? 'mm-active' : '' }}" href="{{ route('admin.kuesioner') }}">
                        <i class='bx bx-poll'></i>
                        <span>Kuesioner</span>
                    </a>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->