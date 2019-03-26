@extends('layouts.app')

@section('content')
<div class="container">

 
<div class="row justify-content-center">
    <div class="col-md-8">

    <div class="card" style="color: #93afbb;margin-bottom:10px;">
            <h1 style="text-align:center;padding:10px;">{{$location->name}}</h1>
            <hr>
                <table cellpadding="10">
                <tr><td>Nadmorska Visina:</td><td>{{$location->height}}</td></tr>
                <tr><td>Opis:</td><td>{{$location->description}}</td></tr>
                <tr><td>latitude:</td><td>{{$location->lat}}</td></tr>
                <tr><td>longtitude:</td><td>{{$location->lon}}</td></tr>
                </table>
    </div>

    <div class="card" style="color: #93afbb">
            <h1 style="text-align:center;padding:10px;">Objave</h1>
            <hr>
            
    </div>



    </div>
</div>
@endsection
