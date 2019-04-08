@extends('layouts.app')

@section('content')
  @auth
  
  {{ Form::open(array('route' => 'countries.store')) }}
    {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Ime države'])}}
    {{ Form::text('short', '', ['required' => 'required', 'placeholder' => 'Kratica (tri črke)'])}}
    {{ Form::submit('Dodaj') }}
  {{ Form::close() }}  
  <br>

  @php
  $countries = \App\Country::all();
  $c_array = array();
  foreach($countries as $c){
    $c_array[$c->id] = $c->name;
  }
  @endphp
  
  {{ Form::open(array('route' => 'locations.store')) }}
    {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Ime lokacije'])}}
    {{ Form::text('desc', '', ['required' => 'required', 'placeholder' => 'Kratek opis'])}}
    {{ Form::text('height', '', ['required' => 'required', 'placeholder' => 'Nadmorska višina'])}}
    <br>
    {{ Form::text('lat', '', ['required' => 'required', 'placeholder' => 'Latitude', 'id'=>'lat'])}}
    {{ Form::text('lon', '', ['required' => 'required', 'placeholder' => 'Longtitude', 'id'=>'lon'])}}
    {{ Form::select('country', $c_array, '1' ) }}
    {{ Form::submit('Dodaj') }}
  {{ Form::close() }}  
  <div style="margin: 0 auto; width: 500px; height: 500px;border:5px solid #96b788;border-bottom: 0px" id="mapid"></div>

  <script>  
    jQuery(document).ready(function(){
        navigator.geolocation.getCurrentPosition(function(location) {
            var locDiv = $('.location-div');
            
            var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
            var mymap = L.map('mapid').setView(latlng, 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(mymap);

            var marker;
            mymap.on('click', function(e){
              var coord = e.latlng;
              var lat = coord.lat;
              var lng = coord.lng;
              if(marker){
                marker.remove();
              }
              marker = L.marker(coord).addTo(mymap);

              $('#lat').val(lat);
              $('#lon').val(lng);
            });
        });
    });
    </script>



  @endauth
@endsection