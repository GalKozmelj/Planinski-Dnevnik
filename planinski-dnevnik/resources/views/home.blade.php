@extends('layouts.app')

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
                var options = {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
                };

                function success(pos) {
                var crd = pos.coords;

                console.log('Your current position is:');
                console.log(`Latitude : ${crd.latitude}`);
                console.log(`Longitude: ${crd.longitude}`);
                console.log(`More or less ${crd.accuracy} meters.`);
                }

                function error(err) {
                console.warn(`ERROR(${err.code}): ${err.message}`);
                }

                navigator.geolocation.getCurrentPosition(success, error, options);


                        function showPosition(position) {
                            var latlon = position.coords.latitude + "," + position.coords.longitude;
                        
                            var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=4000x3000&sensor=false&key=AIzaSyDtd4dApZV0I6XKuWxcDIdQcfbWoem_ogc";
                        
                            document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
                        }
                        </script>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
