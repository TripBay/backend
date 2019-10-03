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
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="mb-5">
                <div class="toolbar ">
                    <div class="btn-group">
                        <a class="btn btn-sm btn-icon btn-white" href="{{ route('roles.create') }}">
                            {{-- <i class="text-muted"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </a>
                        <button class="btn btn-sm btn-icon btn-white sort " data-sort="item-title" data-toggle="tooltip" title="Sort">
                            <i class="sorting"></i>
                        </button>
                    </div>
                    <form class="flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-theme form-control-sm search" placeholder="Search" required>
                            <span class="input-group-append">
                            <button class="btn btn-white no-border btn-sm" type="button">
                            <span class="d-flex text-muted"><i data-feather="search"></i></span>
                            </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-theme table-row v-middle">
                        <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="ui-check m-0">
                                        <input type="checkbox">
                                        <i></i>
                                    </label>
                                </th>
                                <th class="text-muted">ID</th>
                                <th class="text-muted sortable" data-toggle-class="asc">Role Name</th>
                                <th class="text-muted" data-toggle-class="asc">No. Users assigned</th>
                                <th style="width:50px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr class=" v-middle" data-id="{{ $role->id }}">
                                    <td>
                                        <label class="ui-check m-0 ">
                                            <input type="checkbox" name="id" value="{{ $role->id }}">
                                            <i></i>
                                        </label>
                                    </td>
                                    <td>
                                        {{ $role->id }}
                                    </td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->users->count() }}</td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item edit">
                                                    Edit
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" {{ $loop->first ? 'disabled' : '' }} class="dropdown-item trash" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        Delete item
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection