@include('layouts.Head')

<body id="page-top">
    <div>
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    {{--  <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>  --}}
                    <div class="sidebar-brand-text mx-3">ADMIN DASHBOARD</div>
                </a>

                <!-- Divider -->
                {{--  <hr class="sidebar-divider my-0">  --}}

                <!-- Nav Item - Dashboard -->


                <!-- Divider -->
                {{--  <hr class="sidebar-divider">  --}}

                <!-- Heading -->
                {{--  <div class="sidebar-heading">
                    Interface
                </div>  --}}

                <!-- Nav Item - Pages Collapse Menu -->


                <!-- Nav Item - Utilities Collapse Menu -->
                {{--  <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('homepage') }}" data-toggle="collapse"
                        data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Utilities</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item" href="#">Colors</a>
                            <a class="collapse-item" href="#">Borders</a>
                            <a class="collapse-item" href="#">Animations</a>
                            <a class="collapse-item" href="#">Other</a>
                        </div>
                    </div>
                </li>  --}}

                <!-- Divider -->
                {{--  <hr class="sidebar-divider">  --}}

                <!-- Heading -->
                <div class="sidebar-heading">
                    Pages
                </div>

                <!-- Nav Item - Pages Collapse Menu -->


                <!-- Nav Item - Charts -->

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <!-- Sidebar Message -->
            </ul>

            @include('layouts.Navbar')
        </div>

        @include('layouts.script')
</body>

</html>
