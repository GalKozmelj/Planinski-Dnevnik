@extends('layouts.app')

@section('content')
<div class="container">

    @php
        $county_id = $location->country_id;
        $post = /app/Post::where('country_id', $country_id);
    @endphp



 
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
                radius: 100
            }).addTo(mymap);
        };
        </script>

    <div class="card" style="color: #93afbb">
            <h1 style="text-align:center;padding:10px;">Objave</h1>
            <hr>

            <div class="objava" style=" border-top:solid #ddd 1px; border-bottom:solid #ddd 1px; padding:5px">
                <p style="float:left"><b style="font-size:20px;">{{-- {{$post->name}} --}}</b></p>
                <p style="clear:both;color:#ddd">(ustvarjeno: 10.1.2019)</p>
                <p style="float:right"><img width="50px;" height="50px;" src="svg/user_icon.png" alt="user_icon"> Uporabnik</p>
                <p style="clear:both"><b>Post desc</b> -sdajsdoasjdaoisjdoaisjdaoisjdoaisjdoaijsdasd</p>
            </div>

            

            <input type="submit" style="width:100%;background-color:#96b788;border: 1px solid #fff; color: white;padding-top:5px;padding-bottom:5px;" value="Ustvari novo objavo">
        </div>




</div>

    </div>
</div>
@endsection
