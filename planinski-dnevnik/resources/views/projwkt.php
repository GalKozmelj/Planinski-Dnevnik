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
                    {{-- <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a></iframe></div><br /> --}}




                    <style>
                    .maps {
                        width: 600px;
                        height: 200px;
                        border: 0;
                    }
                    </style>


                    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
                    async defer></script>


                    <script>
                        navigator.geolocation.getCurrentPosition(function(position) {
                            console.log("Vaša trenutna pozicija je:");  
                            var latitude =position.coords.latitude;
                            var longitude = position.coords.longitude;
                            console.log(latitude, longitude);
                        });
         
                    </script>

                <script>
                    navigator.geolocation.getCurrentPosition(function(position)){
                        console.log("vaša trenutna lokacija je :")
                    }
                    
                </script>


                    {{-- <iframe allowfullscreen="" class="maps" frameborder="0" id="mapnavi" name="mapnavi" src="https://www.google.com/maps/embed/v1/directions?
                        origin=console.log(latitude)+longitude
                        &destination=rome
                        &key=AIzaSyC-5CY9mOCeg5Y3IhPqi_Yd0-DZtWrJl-E">
                    </iframe> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
