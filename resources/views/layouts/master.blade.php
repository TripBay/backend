<!doctype html>
<html lang="en">
    @include('partials.head')
	<body>

		<!-- Loading starts -->
		@if(Request::routeIs('dashboard'))
			<div id="loading-wrapper">
				<div class="spinner-border text-apex-green" role="status">
					<span class="sr-only">Loading...</span>
				</div>
			</div>
		@endif
		<!-- Loading ends -->

		<div class="container">

			<!-- Header start -->
			@include('partials.header')
			<!-- Header end -->

			<!-- Navigation start -->
			@include('partials.nav')
			<!-- Navigation end -->
			<!-- *************
				************ Main container start *************
				************* -->
			<div class="main-container">

                @yield('content')

            </div>
            
		</div>

        @include('partials.scripts')

	</body>

</html>