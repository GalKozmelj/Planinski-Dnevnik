@extends('layouts.app')

@section('content')
  @auth
  <nav class="form-frame">
    {{ Form::open(array('route' => 'countries.store')) }}
      {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Ime države'])}}
      {{ Form::text('short', '', ['required' => 'required', 'placeholder' => 'Kratica (tri črke)'])}}
      {{ Form::submit('Dodaj') }}
    {{ Form::close() }}  
  </nav>
  <br>

  @php
  $countries = \App\Country::all();
  $c_array = array();
  foreach($countries as $c){
    $c_array[$c->id] = $c->name;
  }
  @endphp
  <nav class="form-frame">
    {{ Form::open(array('route' => 'locations.store', 'id'=>'add-location')) }}
      {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Ime lokacije'])}}
      {{ Form::text('desc', '', ['required' => 'required', 'placeholder' => 'Kratek opis'])}}
      {{ Form::text('height', '', ['required' => 'required', 'placeholder' => 'Nadmorska višina'])}}
      <br>
      {{ Form::text('lat', '', ['required' => 'required', 'placeholder' => 'Latitude', 'id'=>'lat'])}}
      {{ Form::text('lon', '', ['required' => 'required', 'placeholder' => 'Longtitude', 'id'=>'lon'])}}
      {{ Form::select('country', $c_array, '1' ) }}
      {{ Form::submit('Dodaj') }}
    {{ Form::close() }}  
    <div style="margin: 0 auto; width: 500px; height: 500px;border:5px solid #96b788;" id="mapid"></div>

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
  </nav>
    <style>
      .form-frame{
        background-color: white;
        padding: 10px 0 10px 0;
        width: 800px;
        display:flex;
        border-radius: 5px;
        margin: 0 auto;
      }

      .form-frame #mapid{
        float: right;
        margin: 0 0 0 100px !important;
        padding: 0  !important;
      }

      #add-location{
        padding: 10px;
        float: left;
        border-radius: 5px;

      }

      .form-frame input{
        display:list-item;
        border-radius: 5px;
        margin-bottom: 5px;
        padding: 2px;
        border: 1px solid lightblue;
      }
    </style>

  @endauth
@endsection