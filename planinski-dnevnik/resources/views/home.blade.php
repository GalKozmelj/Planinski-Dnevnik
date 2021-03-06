@extends('layouts.app')

@section('content')

<div class="container">

 
    <div class="row justify-content-center">
        <div class="col-md-8">

            
            <div class="card">
                {{Form::open(array('url' => '/profile'))}}
                    <p style="color: #93afbb; text-align:center; border-bottom: 2px solid #93afbb">Kam želite oditi na pohod?
                        {{ Form::text('name', '', ['required' => 'required', 'style' => 'width:100%;border:1px solid white'])}}
                    </p>
                    <p>
                        <input type="submit" style="width:100%;background-color:#96b788;border: 1px solid #fff; color: white;padding-top:5px;padding-bottom:5px;" value="išči">
                    </p>
                {{Form::close()}}
            </div>

            <div class="location-div">

            </div>

                    {{-- LEAFLET --}}
                    <div style="height: 400px;border:5px solid #96b788;border-bottom: 0px" id="mapid"></div>

                    <script>  
                    jQuery(document).ready(function(){
                        navigator.geolocation.getCurrentPosition(function(location) {
                            var locDiv = $('.location-div');
                            
                            var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
                            var mymap = L.map('mapid').setView(latlng, 13);

                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(mymap);

                            var marker = L.marker(latlng).addTo(mymap);
                            
                            //AJAX POST zahteva v HomeController, najde najbližjo lokacijo
                            $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            });

                            jQuery.ajax({
                            url: "{{ url('/home/post') }}",
                            method: 'get',
                            data: {
                                lat: location.coords.latitude,
                                lon: location.coords.longitude
    
                            },
                            success: function(result){
                                $('.location-div').html(result);
                            }
                            });      
                        });
                    });
                    </script>
                        
                            <div style="width:100%;background-color:#abe; text-align:center;padding:10px;">
                                <a style="padding:10px;;color:white" href="/home">Refresh</a>
                            </div>
                            
                        
            </div>
        </div>
    </div>
</div>

@endsection