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

                    You are now online!

                        <script>
                        function getLocation() {
                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(showPosition);
                            } else {
                                //x.innerHTML = "Geolocation is not supported by this browser.";
                            }
                            }

                            function showPosition(position) {
                            /*x.innerHTML = "Latitude: " + position.coords.latitude +
                            "<br>Longitude: " + position.coords.longitude;
                            */
                            console.log(position.coords.latitude);
                            console.log(position.coords.longitude);

                            }

                            function loadMap() {
                            var mapOptions = {
                                center: new google.maps.LatLng(22.719840899999998, 75.8824308),
                                zoom: 13,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };

                            var map = new google.maps.Map(document.getElementById("sample"), mapOptions);
                            console.log(map);
                            }
                        </script>
                        
                        <div onload="getLocation()">
                                <div id="sample" style="width:100%; height:580px;"></div>
                                <button onclick="loadMap()">Show Map</button>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection