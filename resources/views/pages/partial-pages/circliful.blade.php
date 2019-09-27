@push('additionalCSS')
<link rel="stylesheet" href="{{ asset('assets/vendor/circliful/circliful.css') }}" />
@endpush

@push('additionalJS')
<script src="{{ asset('assets/vendor/circliful/circliful.min.js') }}"></script>

<script>
$( document ).ready(function() {



    $("#tasks").circliful({
        animationStep: 5,
        foregroundBorderWidth: 5,
        backgroundBorderWidth: 5,
        percent: 60,
        fontColor: '#000000',
        foregroundColor: '#fd8448',
        backgroundColor: 'rgba(0, 0, 0, 0.1)',
        icon: '\e85d',
        iconColor: '#fd8448',
        iconPosition: 'middle',
        text: 'Tasks',
        textBelow: true,
        animation: 1,
        animationStep: 1,
        start: 2,
        showPercent: 1,		
    });

    $("#trainings").circliful({
        animationStep: 5,
        foregroundBorderWidth: 5,
        backgroundBorderWidth: 5,
        percent: 70,
        fontColor: '#000000',
        foregroundColor: '#ffb445',
        backgroundColor: 'rgba(0, 0, 0, 0.1)',
        icon: '\e54b',
        iconColor: '#ffb445',
        iconPosition: 'middle',
        text: 'Trainings',
        textBelow: true,
        animation: 1,
        animationStep: 1,
        start: 2,
        showPercent: 1,		
    });

    $("#friends").circliful({
        animationStep: 5,
        foregroundBorderWidth: 5,
        backgroundBorderWidth: 5,
        percent: 80,
        fontColor: '#000000',
        foregroundColor: '#00b894',
        backgroundColor: 'rgba(0, 0, 0, 0.1)',
        icon: '\e853',
        iconColor: '#00b894',
        iconPosition: 'middle',
        text: 'Friends',
        textBelow: true,
        animation: 1,
        animationStep: 1,
        start: 2,
        showPercent: 1,
    });

});


</script>
@endpush