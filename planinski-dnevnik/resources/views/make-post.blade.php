
<div class="card" style="margin-top: 5px; color: black; text-align:center">
Trenutno ste na/v:  <a href="/profile/{{$loc->name}}">{{$loc->name}}</a>

  {{ Form::open(array('route' => 'posts.store')) }}
    {{ Form::textarea('content', '', ['required' => 'required', 'placeholder' => 'Post content'])}}
    {{ Form::hidden('location_id', $loc->id, ['required' => 'required'])}}
    {{ Form::hidden('user_id', Auth::user()->id, ['required' => 'required'])}}
    {{ Form::hidden('lat', $lat, ['required' => 'required'])}}
    {{ Form::hidden('lon', $lon, ['required' => 'required'])}}
    <br>
    {{ Form::submit('Dodaj') }}
  {{Form::close()}}
</div>

