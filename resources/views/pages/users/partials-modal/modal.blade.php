<div class="modal-dialog d-flex flex-column w-md bg-body" id="user-nav">
    <div class="navbar">
        <span class="text-md mx-2">Roles</span>
        <div class="dropdown dropright">
            <button data-toggle="dropdown" class="btn btn-sm btn-icon no-bg no-shadow">
                {{-- <i data-feather="plus"></i> --}}
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
                        $roles = App\Role::get();
                    @endphp
                    <li>
                        <a href="{{ route('users.index') }}#all">
                            <span class="nav-text">All</span>
                            <span class="nav-badge">
                            <b class="badge badge-sm badge-pill gd-danger">{{ $users->count() }}</b>
                            </span>
                        </a>
                    </li>
                    @foreach ($roles as $role)
                        <li>
                            <a href="{{ route('users.index') }}#{{ lcfirst($role->name) }}">
                                <span class="nav-text">{{ $role->name }}</span>
                                <span class="nav-badge">
                                <b class="badge badge-sm badge-pill {{ $loop->first ? 'gd-info' : 'gd-warning' }}">{{ $role->users->count() > 0 ? $role->users->count() : '' }}</b>
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    <!-- / -->
</div>