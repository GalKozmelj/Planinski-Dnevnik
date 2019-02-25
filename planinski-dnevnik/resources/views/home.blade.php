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
                    navigator.geolocation.getCurrentPosition(function(position){
                        var lati =position.coords.latitude;
                        var long = position.coords.longitude;
                        var velenje = {lat: lati, lng: long};
                    });
                    </script>
                            
                    <div style="width: 100%">
                        <iframe src="https://www.google.com/maps/embed?
                        pb=!1m18!1m12!1m3!1d2314.9443297912608!2d15.121500213349647!3d46.37041437882164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765612f225497d5%3A0x6e9c117edab89adb!2sMe%C5%A1kova+ulica+3%2C+3320+Velenje!5e0!3m2!1ssl!2ssi!4v1551091782448" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
