@extends('layouts.app')

@section('content')
<div class="container">

 
<div class="row justify-content-center">
    <div class="col-md-8">

    <div class="card" style="color: #96b788;margin-bottom:10px;border-top:3px solid #7e9972">
            <h1 style="text-align:center;padding:10px;">{{$location->name}}</h1>
            <hr>
                <table cellpadding="10">
                <tr><td>Nadmorska Visina:</td><td>{{$location->height}}</td></tr>
                <tr><td>Opis:</td><td>{{$location->description}}</td></tr>
                <tr><td>latitude:</td><td>{{$location->lat}}</td></tr>
                <tr><td>longtitude:</td><td>{{$location->lon}}</td></tr>
                </table>
    </div>

    
    
    <div class="card">
        {{-- LEAFLET --}}
        <div style="height: 400px;border:5px solid #96b788;" id="mapid"></div>
        <script>                   
        window.onload = function(){
            var latlng = new L.LatLng(@json($location->lat), @json($location->lon));
            
            var mymap = L.map('mapid').setView(latlng, 15)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(mymap);

            var marker = L.marker(latlng).addTo(mymap);
            
            var circle = L.circle(latlng, {
                color: 'green',
                fillColor: '#aaddaa',
                fillOpacity: 0.5,
                radius: 50
            }).addTo(mymap);
        };
        </script>

    <div class="card" style="color: #93afbb">
            <h1 style="text-align:center;padding:10px;">Objave</h1>
            <hr>
            
    </div>




</div>

    </div>
</div>
@endsection
