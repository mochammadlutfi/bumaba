<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-list"></i>
            </button>
            <!-- END Toggle Sidebar -->

        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section" id="app">

            <!-- Notifications -->
            {{-- @include('admin.layouts.notif') --}}
            <!-- END Notifications -->

            <!-- User Dropdown -->
            @if(Auth::guard('admin')->check())
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">{{ Auth::guard('admin')->user()->anggota->nama }}</span>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                        <a class="dropdown-item" href="#">
                            <i class="si si-wrench mr-5"></i> Pengaturan
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="si si-logout mr-5"></i> Keluar

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                </div>
            @endif

            @if(Auth::guard('web')->check())
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">{{ auth()->guard('web')->user()->anggota->nama }} </span>
                    <i class="fa fa-angle-down ml-5"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                    <a class="dropdown-item" href="#">
                        <i class="si si-wrench mr-5"></i> Pengaturan
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="si si-logout mr-5"></i> Keluar

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>
            @endif
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
</header>
