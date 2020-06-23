@extends('layouts.mainLayout')

@section('content')
  <div>
  NAME: <b> {{$formaggio['name'] }}</b> <br>
  COLORE: <b> {{$formaggio['colore']}} </b><br>
  STAGIONATURA: <b>  {{$formaggio['stagionatura']}} </b><br>
  PROVENIENZA: <b> {{$formaggio['provenienza']}} </b><br>
  CERTIFICAZIONE BIOLOGICA: <b> {{$formaggio['certBiologica']}} </b>
</div>
<br>
  <div>
    <a href="{{route('delete', $formaggio['id'])}}">DELETE RECORD</a>
    <a href="{{route('edit', $formaggio['id'])}}"><b>EDIT RECORD</b></a>
  </div>

@endsection
