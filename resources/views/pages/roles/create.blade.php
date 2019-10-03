@extends('layouts.master')

@section('content')
<div>
    <div class="page-hero page-container " id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Style</h2>
                <small class="text-muted">Format data into a table</small>
            </div>
            <div class="flex"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-8 pl-4">
            <div class="card">
                <div class="card-header">
                    <strong>New Role</strong>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="text-muted" for="Name">Name</label>
                            <input type="text" id="Name" class="form-control" name="name" placeholder="Name here.." value="{{ old('content') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="p-3 text-muted">Category</div>
                @php
                    $roles = App\Role::get();
                @endphp
                <ul class="nav flex-column">
                    @foreach($roles as $role)
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="badge badge-circle {{ $role->id == 1 ? 'text-primary' : 'text-warning' }} mx-1"></span>
                                <span class="nav-text">{{ $role->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection