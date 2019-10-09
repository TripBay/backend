@extends('layouts.master')

@section('content')
<div class="d-flex flex fixed-content">
    <div class="fade aside aside-sm" id="content-aside">
        @include('pages.users.partials-modal.modal')
    </div>
    <div class="d-flex flex" id="content-body">
        <div class="d-flex flex-column flex" data-plugin="user">
            <div class="p-3">
                <div class="toolbar">
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-white">
                        <i data-feather="arrow-left"></i>
                    </a>
                    <button class="btn btn-sm no-bg ml-auto">
                        <i data-feather="edit-2"></i>
                    </button>
                    <button data-toggle="modal" data-target="#content-aside" data-modal class="btn btn-sm btn-white d-md-none">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
            <div class="scroll-y mx-3 mb-3 card">
                <div class="p-4 d-sm-flex no-shrink b-b">
                    <div>
                        <a href="#" class="avatar w-96">
                            <img src="{{ $user->profile->image }}" alt=".">
                        </a>
                    </div>
                    <div class="px-sm-4 my-3 my-sm-0 flex">
                        <h2 class="text-md">{{ ucfirst($user->name) }}</h2>
                        <small class="d-block text-fade">Senior Industrial Designer</small>
                        <div class="my-3">
                            <a href="#">
                                <strong>561</strong> <span class="text-muted">Posts</span>
                            </a>
                            <a href="#" class="mx-2">
                                <strong>4,000</strong> <span class="text-muted">Followers</span>
                            </a>
                            <a href="#">
                                <strong>500</strong> <span class="text-muted">Following</span>
                            </a>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn btn-icon btn-rounded">
                            <i data-feather="mail"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-rounded">
                            <i data-feather="more-vertical"></i>
                        </a>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-12 b-r">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="px-2">
                                        <div class="py-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <span>{{ $user->profile->address ?? 'California' }}</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <span>{{ $user->email }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="px-4 py-4">
                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <small class="text-muted">Cell Phone</small>
                                                <div class="my-2">1243 0303 0333</div>
                                            </div>
                                            <div class="col-6">
                                                <small class="text-muted">Family Phone</small>
                                                <div class="my-2">+32(0) 3003 234 543</div>
                                            </div>
                                        </div>
                                        <div>
                                            <small class="text-muted">Bio</small>
                                            <div class="my-2">{{ $user->profile->about }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection