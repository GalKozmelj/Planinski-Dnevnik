@extends('layouts.app')

@section('content')
<div class="container">




 
<div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">


        @php
        use App\User;
        $user_id = \Auth::user()->id;
        $user_data = \App\UserLocations::where('user_id', $user_id)->get();
        
 
        @endphp



        @foreach($user_data as $object)
        @php
            $user_data = App\User::where('id', $object->user_id)->first();        
        @endphp

            <p style="clear:both;color:#ddd">{{$object->created_on}}</p>
            <p style="float:left"><img width="50px;" height="50px;" src="/svg/user_icon.png" alt="user_icon">


        {{$user_data->name}}:
        {{ $object->content }}
        @endforeach


        
    </div>
    </div>
</div>
@endsection
