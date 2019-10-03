@extends('layouts.master')

@section('content')
<div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="text-center p-5">
                <h2 class="text-highlight">Account Pricing</h2>
            </div>
            <div class="text-center">
                <div class="block d-inline-flex">
                    <div class="p-4 p-sm-5 b-r">
                        <sup class="text-sm" style="top: -0.5em;">$</sup><span class="h1">30</span>
                        <div class="text-muted">Deluxe</div>
                        <div class="py-4">
                            <a href="#" class="btn btn-sm btn-rounded btn-primary">Edit Price</a>
                        </div>
                        <small class="text-muted">Yearly subscription!</small>
                    </div>

                    <div class="p-4 p-sm-5 b-r">
                        <sup class="text-sm" style="top: -0.5em;">$</sup><span class="h1">50</span>
                        <div class="text-muted">Gold</div>
                        <div class="py-4">
                            <a href="#" class="btn btn-sm btn-rounded btn-primary">Edit Price</a>
                        </div>
                        <small class="text-muted">Yearly subscription!</small>
                    </div>

                    <div class="p-4 p-sm-5 b-r">
                        <sup class="text-sm" style="top: -0.5em;">$</sup><span class="h1">100</span>
                        <div class="text-muted">Diamond</div>
                        <div class="py-4">
                            <a href="#" class="btn btn-sm btn-rounded btn-primary">Edit Price</a>
                        </div>
                        <small class="text-muted">Yearly subscription!</small>
                    </div>
                    <div class="p-4 p-sm-5 b-r">
                        <div class="py-4">
                            <a href="#" class="btn btn-sm btn-rounded btn-primary">Add new</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 text-center">
                Everything you need to build your web application.
            </div>
        </div>
    </div>
</div>
@endsection