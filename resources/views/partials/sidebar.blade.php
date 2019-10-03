<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
    <div class="sidenav h-100 modal-dialog bg-light">
        <!-- sidenav top -->
        <div class="navbar">
            <!-- brand -->
            <a href="index.html" class="navbar-brand ">
                <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <g class="loading-spin" style="transform-origin: 256px 256px">
                        <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                    </g>
                </svg>
                <!-- <img src="../assets/img/logo.png" alt="..."> -->
                <span class="hidden-folded d-inline l-s-n-1x ">TripBay PH</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- Flex nav content -->
        <div class="flex scrollable hover">
            <div class="nav-active-text-primary" data-nav>
                <ul class="nav bg">
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Main</span>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <span class="nav-icon text-primary"><i data-feather='home'></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Applications</span>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}">
                            <span class="nav-icon text-success"><i data-feather='users'></i></span>
                            <span class="nav-text">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('roles.index') }}">
                            <span class="nav-icon text-danger"><i data-feather='lock'></i></span>
                            <span class="nav-text">Roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('accounts.index') }}">
                            <span class="nav-icon text-warning"><i data-feather='link'></i></span>
                            <span class="nav-text">Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="nav-icon text-info"><i data-feather='bookmark'></i></span>
                            <span class="nav-text">Hotels</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav ">
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Other Pages Here</span>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='rss'></i></span>
                            <span class="nav-text">Articles</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('articles.index') }}" class="">
                                    <span class="nav-text">All Articles</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('articles.create') }}" class="">
                                    <span class="nav-text">Add Article</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- sidenav bottom -->
        <div class="no-shrink ">
            <div class="p-3 d-flex align-items-center">
                <div class="text-sm hidden-folded text-muted">
                    Trial: 35%
                </div>
                <div class="progress mx-2 flex" style="height:4px;">
                    <div class="progress-bar gd-success" style="width: 35%"></div>
                </div>
            </div>
        </div>
    </div>
</div>