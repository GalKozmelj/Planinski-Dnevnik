
<div class="card" style="margin-top: 5px; color: black;">
  @php
      
  @endphp
Trenutno ste na/v:  {{link_to_action('LocationController@redirect', 'trenutna lokacija', ['location_name'=>$loc->name])}}

  {{ Form::open(array('route' => 'posts.store')) }}
    {{ Form::textarea('content', '', ['required' => 'required', 'placeholder' => 'Post content'])}}
    {{ Form::hidden('location_id', $loc->id, ['required' => 'required'])}}
    {{ Form::hidden('user_id', Auth::user()->id, ['required' => 'required'])}}
    {{ Form::hidden('lat', $lat, ['required' => 'required'])}}
    {{ Form::hidden('lon', $lon, ['required' => 'required'])}}
    {{ Form::submit('Dodaj') }}
  {{Form::close()}}
</div>

