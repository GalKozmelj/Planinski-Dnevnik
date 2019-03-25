-@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- LEAFLET --}}
                    <div style="height: 380px;border:5px solid white;" id="mapid"></div>

                    <script>                   
                    navigator.geolocation.getCurrentPosition(function(location) {
                    var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

                    var mymap = L.map('mapid').setView(latlng, 13)
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(mymap);

                    var marker = L.marker(latlng).addTo(mymap);
                    });
                    </script>


            </div>
        </div>
    </div>
</div>
@endsection