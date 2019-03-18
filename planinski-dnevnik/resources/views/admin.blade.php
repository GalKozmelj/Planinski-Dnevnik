-@extends('layouts.app')

@section('content')
  @auth
  
  {{ Form::open(array('route' => 'countries.store')) }}
    {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Ime države'])}}
    {{ Form::text('short', '', ['required' => 'required', 'placeholder' => 'Kratica (tri črke)'])}}
    {{ Form::submit('Dodaj') }}
  {{ Form::close() }}  
  

  
  @endauth
@endsection