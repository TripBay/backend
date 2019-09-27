		<!-- *************
				************ Required JavaScript Files *************
			************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/js/nav.min.js') }}"></script>
		<script src="{{ asset('assets/js/moment.js') }}"></script>


		<!-- *************
				************ Vendor Js Files *************
			************* -->
		<!-- Daterange -->
		<script src="{{ asset('assets/vendor/daterange/daterange.js') }}"></script>

		<!-- Apex Charts -->
		@if(Request::routeIs('dashboard'))
		<script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/apexLineChartGradient.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/apexColumnBasic.js') }}"></script>
		<script src="{{ asset('assets/vendor/apex/custom/apexAllCustomGraphs.js') }}"></script>
		@endif

		<!-- Main Js Required -->
		<script src="{{ asset('assets/js/main.js') }}"></script>

		@stack('additionalJS')