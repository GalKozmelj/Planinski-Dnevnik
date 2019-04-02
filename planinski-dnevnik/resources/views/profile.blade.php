@extends('layouts.app')

@section('content')
<div class="container">

    @php
        use App\User;
        $location_data = \App\Post::where('location_id', $location->id)->get();
        /* $user_data = \App\Post::where($user->id, $location->user_id)->get(); */
 
    @endphp



 
<div class="row justify-content-center">
    <div class="col-md-8">

    <div class="card" style="color: #96b788;margin-bottom:10px;border-top:3px solid #7e9972">
            <h1 style="text-align:center;padding:10px;">{{$location->name}}</h1>
            <hr>
                <table cellpadding="10">
                <tr><td>Nadmorska Visina:</td><td>  {{$location->height}}</td></tr>
                <tr><td>Opis:</td><td>              {{$location->description}}</td></tr>
                <tr><td>latitude:</td><td>          {{$location->lat}}</td></tr>
                <tr><td>longtitude:</td><td>        {{$location->lon}}</td></tr>
                </table>
    </div>

    
    
    <div class="card">
        {{-- LEAFLET --}}
        <div style="height: 400px;border:5px solid #96b788;border-bottom:0px" id="mapid"></div>
        <script>                   
        window.onload = function(){
            var latlng = new L.LatLng(@json($location->lat), @json($location->lon));
            
            var mymap = L.map('mapid').setView(latlng, 10)
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
                        {{Form::open(array('url' => '/check_location'))}}
                        <p>
                            <input type="submit" style="width:100%;background-color:#abe;border: 1px solid #fff; color: white;padding-top:5px;padding-bottom:5px;" value="Check location">
                        </p>
                        {{Form::close()}}


    <div class="card" style="color: #93afbb;margin-top:3%">
            <h1 style="text-align:center;padding:10px;">Objave</h1>
            <div class="objava" style=" border-top:solid #ddd 1px; border-bottom:solid #ddd 1px; padding:5px">
                <p style="clear:both">                    
                    @foreach($location_data as $object)
                    @php
                        $user_data = App\User::where('id', $object->user_id)->first();        
                    @endphp

                        <p style="clear:both;color:#ddd">{{$object->created_on}}</p>
                        <p style="float:left"><img width="50px;" height="50px;" src="/svg/user_icon.png" alt="user_icon">


                    {{$user_data->name}}:
                    {{ $object->content }}
                    @endforeach
                </p>
            </div>

            
            @include('make-post', ['lat'=>0, 'lon'=>0, 'location'=>$location, 'display_link'=>false])
        </div>




</div>

    </div>
</div>
@endsection
