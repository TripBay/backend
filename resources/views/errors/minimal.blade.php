<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        @include('partials.head')
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            <div class="code">
                @yield('code')
            </div>

            <div class="message" style="padding: 10px;">
                @yield('message')
            </div>
        </div> --}}
        <div class="d-flex flex align-items-center h-v info theme">
            <div class="text-center p-5 w-100">
                <h1 class="display-5 my-5">@yield('message')</h1>
                <p>Go back to
                    <a href="{{ route('dashboard') }}" class="b-b b-white">Home</a>
                <p class="my-5 text-muted h4">
                   -- @yield('code') --
                </p>
            </div>
        </div>
        @include('partials.scripts')
    </body>
</html>
