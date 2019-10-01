<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- ajax page -->
<script src="{{ asset('libs/pjax/pjax.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax.js') }}"></script>
<!-- lazyload plugin -->
<script src="{{ asset('assets/js/lazyload.config.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<!-- scrollreveal -->
<script src="{{ asset('libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
<!-- feathericon -->
<script src="{{ asset('libs/feather-icons/dist/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feathericon.js') }}"></script>
<!-- theme -->
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/utils.js') }}"></script>

{{-- <script src="{{ asset('libs/typehead.js/dist/typehead.bundle.min.js') }}"></script> --}}

@stack('additionalJS')