-@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                    <div class="card-header">Search</div>
                    <div class="card-body">
                    </div>
                    <div class="card-body">

                        <form method="POST" action="#">
                            @csrf
                            <input style="width:100%;padding:10px;" placeholder="Vnesite mesto ki ga želite poiskati" type="text">
                        </form>
                    </div>



                <div class="card-header">Maps</div>
                <div class="card-body">
                    You are now located in:
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{-- LEAFLET --}}
                    <div style="height: 180px;" id="mapid"></div>

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
</div>
@endsection