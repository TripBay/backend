@extends('layouts.app')

@section('content')
    
@endsection


{{-- ****Preparing template for password reset**** --}}


{{-- @section('session')
<div class="d-flex flex-column flex">
    <div class="row no-gutters h-100">
        <div class="col-md-6 bg-primary r-l" style="">
            <div class="p-3 p-md-5 d-flex flex-column h-100">
                <h4 class="mb-3 text-white">Basik</h4>
                <div class="text-fade">Bootstrap 4 Web Application</div>
                <div class="d-flex flex align-items-center justify-content-center">
                </div>
                <div class="d-flex text-sm text-fade">
                    <a href="index.html" class="text-white">About</a>
                    <span class="flex"></span>
                    <a href="#" class="text-white mx-1">Terms</a>
                    <a href="#" class="text-white mx-1">Policy</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="content-body">
                <div class="p-3 p-md-5">
                    <div>
                        <h5>Forgot your password?</h5>
                        <p class="text-muted my-3">
                            Enter your email below and we will send you instructions on how to change your password.
                        </p>
                    </div>
                    <form class="py-5 my-md-5" method="POST" action="{{ route('password.email') }}"">
                        @csrf
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
                    </form>
                    <div class="pt-1">
                        Return to
                        <a href="{{ route('login') }}" class="text-primary font-weight-bold">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
