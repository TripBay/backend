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
                        {{-- <button class="btn btn-sm btn-icon btn-white" data-toggle="tooltip" title="Trash" id="btn-trash">
                            <i data-feather="trash" class="text-muted"></i>
                        </button> --}}
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
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="#">
                                                    See detail
                                                </a>
                                                <a class="dropdown-item download">
                                                    Download
                                                </a>
                                                <a class="dropdown-item edit">
                                                    Edit
                                                </a>
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