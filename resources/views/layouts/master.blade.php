<!DOCTYPE html>
<html lang="en">

	@include('partials.head')

    <body class="layout-row">
        <!-- ############ Aside START-->
        @include('partials.sidebar')
        <!-- ############ Aside END-->
        <div id="main" class="layout-column flex">
            <!-- ############ Header START-->
            @include('partials.header')
            <!-- ############ Footer END-->
            <!-- ############ Content START-->
            <div id="content" class="flex ">
                <!-- ############ Main START-->
                @yield('content')
                <!-- ############ Main END-->
            </div>
			<!-- ############ Content END-->
			
			<!-- ############ Footer START-->
			@include('partials.footer')
			<!-- ############ Footer END-->

        </div>
        <!-- build:js ../assets/js/site.min.js -->
        <!-- jQuery -->
        @include('partials.scripts')
        <!-- endbuild -->
    </body>
</html>