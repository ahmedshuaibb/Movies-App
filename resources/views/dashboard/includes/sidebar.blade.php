<div class="leftside-menu">

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo_sm_dark.png')}}" alt="" height="16">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                            aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end">4</span>
                            <span> Movies </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="/admin/movies">All Movies</a>
                                </li>
                                <li>
                                    <a href="/admin/movies/create">Add Movie</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>

                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>