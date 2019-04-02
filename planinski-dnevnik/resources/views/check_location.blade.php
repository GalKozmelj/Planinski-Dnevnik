<meta name="csrf-token" content="{{ csrf_token() }} ">
<script src="{{ asset('js/app.js') }}"></script>

<div class="md-5">
<img style="margin-left:30%" src="/svg/load1.gif" alt="load1">
</div>

<script>  
    jQuery(document).ready(function(){
        navigator.geolocation.getCurrentPosition(function(location) {
            //AJAX POST zahteva v HomeController, najde najbližjo lokacijo
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            jQuery.ajax({
            url: "{{ url('/check_location/store') }}",
            method: 'get',
            data: {
                lat: location.coords.latitude,
                lon: location.coords.longitude,
                location_id: @json($location_id),
                user_id: @json($user_id)
            },
            success: function(result){
              console.log(result);
            }
            });      
        });
    });
    </script>
@php
  header("Refresh:3; url=seznam");
@endphp