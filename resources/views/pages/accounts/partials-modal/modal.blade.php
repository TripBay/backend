<div class="modal-dialog d-flex flex-column w-md bg-body" id="user-nav">
    <div class="navbar">
        <span class="text-md mx-2">Types</span>
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
                        $accounts = App\Account::get();
                        $types = App\Type::get();
                    @endphp
                    <li>
                        <a href="{{ route('accounts.index') }}#all">
                            <span class="nav-text">All</span>
                            <span class="nav-badge">
                            <b class="badge badge-sm badge-pill gd-danger">{{ $accounts->count() }}</b>
                            </span>
                        </a>
                    </li>
                    @foreach ($types as $type)
                        <li>
                            <a href="{{ route('accounts.index') }}#{{ lcfirst($type->name) }}">
                                <span class="nav-text">{{ $type->name }}</span>
                                <span class="nav-badge">
                                <b class="badge badge-sm badge-pill {{ $loop->first ? 'gd-info' : 'gd-warning' }}">{{ $type->accounts->count() > 0 ? $type->accounts->count() : '' }}</b>
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