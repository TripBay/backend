@extends('layouts.master')

@include('pages.partial-pages.circliful')

@section('content')
<div class="page-title">
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h5 class="title">User Profile</h5>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-area-graph"></i></a></li>
                    <li class="breadcrumb-item"><a href="/backend/">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('users.index') }}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page header end -->


<!-- Content wrapper start -->
<div class="content-wrapper">


    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- BEGIN .Custom-header -->
            <header class="custom-banner">
                <div class="row gutters">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="welcome-msg">
                            <div class="welcome-user-thumb">
                                <img src="{{ asset('assets/img/user.png') }}" alt='Retail Admin' />
                            </div>
                            <div class="welcome-title">
                                {{ ucfirst($user->name) }}
                            </div>
                            <div class="welcome-designation">
                                {{ ucfirst($user->role) }}
                            </div>
                            <div class="welcome-email">
                                {{ $user->email }}
                            </div>
                            {{-- <a href="dashboard2.html" class="btn btn-danger btn-sm">Request</a> --}}
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="row gutters user-plans justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div id="tasks"></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div id="trainings"></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div id="friends"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END: .Custom-header -->

        </div>
    </div>
    <!-- Row end -->


    <!-- ************************** Visitors and Revenue ************************** -->
    <!-- Row start -->
    <div class="row gutters justify-content-center">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            
            <div class="daily-sales">
                <div class="activity-icon blue">
                    <i class="icon-heart"></i>
                </div>
                <h6>Hotel listings</h6>
                <h1>5</h1>
            </div>

        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            
            <div class="daily-sales">
                <div class="activity-icon yellow">
                    <i class="icon-pencil"></i>
                </div>
                <h6>Reviews</h6>
                <h1>1.9m</h1>
                <p>Customer reviewed</p>
            </div>

        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            
            <div class="daily-sales">
                <div class="activity-icon pink">
                    <i class="icon-star-outlined"></i>
                </div>
                <h6>Rating</h6>
                <h1>8.9/10</h1>
                <p>Stars rated</p>
            </div>

        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            
            <div class="daily-sales">
                <div class="activity-icon violet">
                    <i class="icon-user-check"></i>
                </div>
                <h6>Customers</h6>
                <h1>22k +</h1>
                <p>Books Completed</p>
            </div>

        </div>
    </div>
    <!-- Row end -->


</div>
@endsection