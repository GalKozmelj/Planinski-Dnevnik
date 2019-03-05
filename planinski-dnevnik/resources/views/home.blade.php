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

                    You are now online!


                    {{-- LEAFLET --}}
                    <div style="height: 180px;" id="mapid"></div>

                    <script>
                        var mymap = L.map('mapid').setView([51.505, -0.09], 13);

                        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZ2Fsa296bWVsaiIsImEiOiJjanN2ajRqNnowM3lyNDNxazY0cXFubXFnIn0.asRIOOwyMjgXxKGLYcZG-w', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox.streets',
                        accessToken: 'your.mapbox.access.token'
                    }).addTo(mymap);
                    </script>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection