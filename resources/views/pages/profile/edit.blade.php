@extends('layouts.master')

@section('content')
<div>
    <div class="page-hero page-container " id="page-hero">
        <div class="p-3">
            <div class="toolbar">
                <a href="{{ route('profile.show',$profile->id) }}" class="btn btn-sm btn-white">
                    <i data-feather="arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Setting</h2>
                <small class="text-muted">Configure the things</small>
            </div>
        </div>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div id="accordion">
                <p class="text-muted">
                    <strong>Account</strong>
                </p>
                <div class="card">
                    <div class="d-flex align-items-center px-4 py-3 pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
                        <div>
                            <span class="w-48 avatar circle bg-info-lt" data-toggle-class="loading">
                                <img src="{{ asset('assets/img/a9.jpg') }}" alt=".">
                            </span>
                        </div>
                        <div class="mx-3 d-none d-md-block">
                            <strong>{{ $profile->user->name }}</strong>
                            <div class="text-sm text-muted">jacqueline@company.co</div>
                        </div>
                        <div class="flex"></div>
                        <div class="mx-3">
                            <i data-feather="chevron-right"></i>
                        </div>
                        <div>
                            <a href="signin.html" class="text-prmary text-sm">Sign Out</a>
                        </div>
                    </div>
                    <div class="collapse p-4" id="c_1">
                        <form role="form">
                            <div class="form-group">
                                <label>Profile picture</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <button type="submit" name="action" value="profile" class="btn btn-primary mt-2">Update</button>
                        </form>
                    </div>
                    <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_2">
                        <i data-feather="lock"></i>
                        <div class="px-3">
                            <div>Password</div>
                        </div>
                        <div class="flex"></div>
                        <div>
                            <i data-feather="chevron-right"></i>
                        </div>
                    </div>
                    <div class="collapse p-4" id="c_2">
                        <form role="form">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>New Password Again</label>
                                <input type="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </form>
                    </div>
                    <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_4">
                        <i data-feather="map-pin"></i>
                        <div class="px-3">
                            <div>Details and more</div>
                        </div>
                        <div class="flex"></div>
                        <div>
                            <i data-feather="chevron-right"></i>
                        </div>
                    </div>
                    <div class="collapse p-4" id="c_4">
                        <form role="form">
                            <div class="form-group">
                                <label>Adress</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>About</label>
                                <textarea name="about" id="" cols="20" rows="3" class="form-control"></textarea>
                            </div>
                            <button type="submit" name="action" value="details" class="btn btn-primary mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection