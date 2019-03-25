@extends('layouts.app')

@section('content')
  @auth
  
  {{ Form::open(array('route' => 'countries.store')) }}
    {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Ime države'])}}
    {{ Form::text('short', '', ['required' => 'required', 'placeholder' => 'Kratica (tri črke)'])}}
    {{ Form::submit('Dodaj') }}
  {{ Form::close() }}  
  <br>

  @php
  
  $countries = \App\Country::all();
  $c_array = array();
  foreach($countries as $c){
    $c_array[$c->id] = $c->name;
  }
  
  @endphp
  {{ Form::open(array('route' => 'locations.store')) }}
    {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Ime lokacije'])}}
    {{ Form::text('desc', '', ['required' => 'required', 'placeholder' => 'Kratek opis'])}}
    {{ Form::text('height', '', ['required' => 'required', 'placeholder' => 'Nadmorska višina'])}}
    <br>
    {{ Form::text('lat', '', ['required' => 'required', 'placeholder' => 'Latitude'])}}
    {{ Form::text('lon', '', ['required' => 'required', 'placeholder' => 'Longtitude'])}}

    {{ Form::select('country', $c_array, '1' ) }}
   
    {{ Form::submit('Dodaj') }}
  {{ Form::close() }}  

  @endauth
@endsection