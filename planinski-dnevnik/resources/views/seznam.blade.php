@extends('layouts.app')

@section('content')
<div class="container">

<div class="row justify-content-center" style="color: black">
    <div class="col-md-8">
    <div class="card">

        @php
        use App\User;
        $user_id = \Auth::user()->id;
        $user_data = \App\UserLocation::where('user_id', $user_id)->get();
         
        @endphp

        @foreach($user_data as $object)
            @php
                $location = App\Location::where('id', $object->location_id)->first();       
            @endphp

            <p style="padding: 10px; border-bottom: 2px solid lightgray">
                    
            {{$location->name }}
            
            @if($object->bool)
                    {{'✅'}}
            @endif
            <span style="float: right;">{{$object->created_at}}</span>
            </p>
        @endforeach


        
    </div>
    </div>
</div>
@endsection
