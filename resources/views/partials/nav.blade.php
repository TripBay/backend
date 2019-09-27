<nav class="navbar navbar-expand-lg custom-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#retailAdminNavbar" aria-controls="retailAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </button>
    <div class="collapse navbar-collapse" id="retailAdminNavbar">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('dashboard') ? 'active-page' : '' }}" href="{{ route('dashboard') }}">
                    <i class="icon-devices_other nav-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('users.*') ? 'active-page' : '' }}" href="{{ route('users.index') }}">
                    <i class="icon-devices_other nav-icon"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('accounts.*') ? 'active-page' : '' }}" href="#">
                    <i class="icon-devices_other nav-icon"></i>
                    Accounts
                </a>
            </li>
        </ul>
    </div>
</nav>