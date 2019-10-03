@extends('layouts.master')

@section('content')
<div>
    <div class="page-hero page-container " id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Datatables</h2>
                <small class="text-muted">Tables plug-in for jQuery</small>
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
                            {{-- <th></th> --}}
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
</div>
@endsection