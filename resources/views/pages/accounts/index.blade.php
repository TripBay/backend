@extends('layouts.master')

@section('content')
<div class="d-flex flex fixed-content">
    <div class="fade aside aside-sm" id="content-aside">
        @include('pages.accounts.partials-modal.modal')

    </div>
    <div class="d-flex flex" id="content-body">
        <div class="d-flex flex-column flex" id="user-list" data-plugin="user">
            <div class="p-3">
                <div class="toolbar ">
                    <div class="btn-group">
                        {{-- <button class="btn btn-sm btn-icon btn-white" data-toggle="tooltip" title="Trash" id="btn-trash">
                            <i data-feather="trash" class="text-muted"></i>
                        </button> --}}
                        <button class="btn btn-sm btn-icon btn-white sort " data-sort="item-author" data-toggle="tooltip" title="Sort">
                            <i class="sorting"></i>
                        </button>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-white no-wrap" data-toggle="dropdown">A-Z</button>
                        <div class="dropdown-menu p-3" id="filter">
                            <span class="badge pointer">A</span>
                            <span class="badge pointer">B</span>
                            <span class="badge pointer">C</span>
                            <span class="badge pointer">D</span>
                            <span class="badge pointer">E</span>
                            <span class="badge pointer">F</span>
                            <span class="badge pointer">G</span>
                            <span class="badge pointer">H</span>
                            <span class="badge pointer">I</span>
                            <span class="badge pointer">J</span>
                            <span class="badge pointer">K</span>
                            <span class="badge pointer">L</span>
                            <span class="badge pointer">M</span>
                            <span class="badge pointer">N</span>
                            <span class="badge pointer">O</span>
                            <span class="badge pointer">P</span>
                            <span class="badge pointer">Q</span>
                            <span class="badge pointer">R</span>
                            <span class="badge pointer">S</span>
                            <span class="badge pointer">T</span>
                            <span class="badge pointer">U</span>
                            <span class="badge pointer">V</span>
                            <span class="badge pointer">W</span>
                            <span class="badge pointer">X</span>
                            <span class="badge pointer">Y</span>
                            <span class="badge pointer">Z</span>
                        </div>
                    </div>
                    <form class="flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-theme form-control-sm search" placeholder="Search" required>
                            <span class="input-group-append">
                                <button class="btn btn-white no-border btn-sm" type="button">
                                    <span class="d-flex text-muted">
                                        <i data-feather="search"></i>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <button data-toggle="modal" data-target="#content-aside" data-modal class="btn btn-sm btn-icon btn-white d-md-none">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
            <div class="scroll-y mx-3 mb-0 card">
                <div class="loading m-4"></div>
                <div class="list list-row hide">
                    @if(!empty($accounts))
                        @foreach($accounts as $account)
                            <div class="list-item " data-id="{{ $account->id }}">
                                <div>
                                    <label class="ui-check m-0 ">
                                        <input type="checkbox" name="id" value="{{ $account->id }}">
                                        <i></i>
                                    </label>
                                </div>
                                <div>
                                    <a href="#" data-toggle-class>
                                        <i data-feather="bookmark" class="active-primary text-muted"></i>
                                    </a>
                                </div>
                                <div class="flex">
                                    <a href="{{ route('accounts.show', $account->id) }}" class="item-author text-color ">{{ $account->name }}</a>
                                    <div class="item-mail text-muted h-1x d-none d-sm-block">
                                        {{ $account->location }}
                                    </div>
                                    <div class="item-tag tag hide">
                                        {{ $account->type->name ?? '' }}
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="#" href="#">
                                                See detail
                                            </a>
                                            <a class="dropdown-item edit">
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="no-result hide">
                    <div class="p-4 text-center">
                        No Results
                    </div>
                </div>
            </div>
            <div class="px-3 py-3 mt-auto">
                <div class="d-flex align-items-center">
                    <div class="flex d-flex flex-row">
                        <button class="btn btn-sm no-bg no-shadow px-0 pager-prev">
                            <i data-feather="chevron-left"></i>
                        </button>
                        <div class="pagination pagination-sm mx-1">
                        </div>
                        <button class="btn btn-sm no-bg no-shadow px-0 pager-next">
                            <i data-feather="chevron-right"></i>
                        </button>
                    </div>
                    <div>
                        <span class="text-muted">Total:</span>
                        <span id="count"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div>
    <div class="page-hero page-container " id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Accounts</h2>
                <small class="text-muted">account's accounts</small>
            </div>
            <div class="flex"></div>
        </div>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="table-responsive">
                <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th><span class="text-muted">ID</span></th>
                            <th><span class="text-muted">Owner</span></th>
                            <th><span class="text-muted">Account Name</span></th>
                            <th><span class="text-muted">Location</span></th>
                            <th><span class="text-muted">Destination Tag</span></th>
                            <th><span class="text-muted d-none d-sm-block">Action</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accounts as $account)
                            <tr class=" " data-id="{{ $account->id }}">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted">{{ $account->id }}</small>
                                </td>
                                <td>
                                    <a href="{{ route('users.show', $account->user->id) }}" class="item-title text-color ">
                                        {{ $account->user->name }}
                                    </a>
                                </td>
                                <td >{{ $account->name }}</td>
                                <td class="flex">
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $account->location }}
                                    </div>
                                </td>
                                <td>
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $account->dest_tag }}
                                    </div>
                                </td>
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
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item trash">
                                                Delete item
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
</div> --}}
@endsection