-@extends('layouts.app')

@section('content')
  @auth
  {{ Form::open(array('action' => 'AdminController@createCountry')) }}
    {{ Form::text('name', '', ['required' => 'required', 'placeholder' => 'Title'])}}
    {{ Form::text('short', '', ['required' => 'required', 'placeholder' => 'Title'])}}
  {{ Form::close() }}
@endauth
@endsection