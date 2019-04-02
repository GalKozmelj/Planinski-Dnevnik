
<div class="card" style="margin-top: 5px; color: black;text-align:center">
  @php
      
  @endphp


Trenutno ste na/v:  {{link_to_action('LocationController@redirect', $location->name, ['location_name'=>$location->name])}}

  {{ Form::open(array('route' => 'posts.store')) }}
    {{ Form::textarea('content', '', ['required' => 'required', 'placeholder' => 'Post content', 'style' => 'width:100%; height:200px; border: 1px solid #abe'])}}
    {{ Form::hidden('location_id', $location->id, ['required' => 'required'])}}
    {{ Form::hidden('user_id', Auth::user()->id, ['required' => 'required'])}}
    {{ Form::hidden('lat', $lat, ['required' => 'required'])}}
    {{ Form::hidden('lon', $lon, ['required' => 'required'])}}
    <br>
    {{ Form::submit('Dodaj', ['style' => 'width:100%;background-color:#abe; text-align:center;padding:10px;color:white; border: 0px']) }}
  {{Form::close()}}
</div>

