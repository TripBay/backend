@push('additionalCSS')
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bs4.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bs4-custom.css') }}" />
@endpush

@push('additionalJS')
<script src="{{ asset('assets/vendor/datatables/dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function(){
        $('#datatables').DataTable({
            
        });
    });
</script>

<!-- Custom Data tables -->
@endpush



