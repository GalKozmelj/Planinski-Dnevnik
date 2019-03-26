@extends('layouts.app')

@section('content')

<div class="container">

    {{--
    teoretično bo tule en form u kirga boš napisu ime lokacije pol to bo to pokazalo na mapi
    pol pa odspodi še seznam useh objam na tisti lokaciji
    izi če mene uprašaš :)    
--}}    

    {{Form::open(array('route' => 'locations.search'))}}
        {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Iščite lokacije'])}}
        {{ Form::submit()}}
    {{Form::close()}}


    <div class="row justify-content-center">
        <div class="col-md-8">
            
            
            <div class="card">
                <form action="">
                    <p style="color: #93afbb; text-align:center">Search:<input style="width:100%;border:1px solid white" type="text"></p>
                </form>
            </div>



            <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- LEAFLET --}}
                    <div style="height: 400px;border:5px solid #93afbb;" id="mapid"></div>

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