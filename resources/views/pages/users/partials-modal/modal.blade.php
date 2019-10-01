<div class="modal-dialog d-flex flex-column w-md bg-body" id="user-nav">
    <div class="navbar">
        <span class="text-md mx-2">Groups</span>
        <div class="dropdown dropright">
            <button data-toggle="dropdown" class="btn btn-sm btn-icon no-bg no-shadow">
                <i data-feather="plus"></i>
            </button>
            <div class="dropdown-menu w-lg">
                <div class="p-3">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="newField" placeholder="Group name" required>
                        <span class="input-group-append">
                            <button class="btn btn-white no-shadow btn-sm" type="button" id="newBtn">
                            <i data-feather="check"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scrollable hover">
        <div class="sidenav p-2">
            <nav class="nav-active-text-primary" data-nav>
                <ul class="nav">
                    @php
                        $users = App\User::get();
                    @endphp
                    <li>
                        <a href="{{ route('users.index') }}#all">
                            <span class="nav-text">All</span>
                            <span class="nav-badge">
                            <b class="badge badge-sm badge-pill gd-danger">{{ $users->count() }}</b>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}#company">
                            <span class="nav-text">Company</span>
                            <span class="nav-badge">
                            <b class="badge badge-sm badge-pill gd-info">3</b>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}#personal">
                            <span class="nav-text">Personal</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}#team">
                            <span class="nav-text">Team</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded mt-2">
                        <span class="d-block pt-1 text-sm text-muted">Tags</span>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}#client">
                            <span class="mx-2">
                            <b class="badge badge-circle sm text-primary"></b>
                            </span>
                            <span class="nav-text">Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}#supplier">
                            <span class="mx-2">
                            <b class="badge badge-circle sm text-info"></b>
                            </span>
                            <span class="nav-text">Suppliers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}#competitor">
                            <span class="mx-2">
                            <b class="badge badge-circle sm text-success"></b>
                            </span>
                            <span class="nav-text">Competitors</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}#corp">
                            <span class="mx-2">
                            <b class="badge badge-circle sm text-warning"></b>
                            </span>
                            <span class="nav-text">Corps</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- / -->
</div>