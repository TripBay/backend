@extends('layouts.master')

@section('lock')
    <div id="ajax-content" class="dark h-v d-flex flex align-items-center">
        <div class="mx-auto w-xl w-auto-xs animate fadeIn text-center">
            <div class="mb-3">
                <img src="{{ auth()->user()->profile->image }}" class="w-72 circle">
                <div class="mt-3 font-bold">{{ auth()->user()->name }}</div>
            </div>
            <form action="{{ route('login.unlock') }}" method="POST" aria-label="{{ __('Locked') }}">
                @csrf
                <div class="md-form-group">
                    <input type="password" id="password" name="password" 
                    class="md-input text-center @error('password') is-invalid @enderror">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label class="d-block w-100">Your Password</label>
                </div>
                <div class="mt-3">
                    <button class="btn-rounded btn-primary" type="submit">Unlock</button>
                </div>
            </form>
        </div>
    </div>
@endsection