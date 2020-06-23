@extends('layouts.mainLayout')

@section('content')
<div class="">
  <form action="{{route('edit')}}" method="post">
    @csrf
    @method('POST')
    <label for="name">NAME</label>
    <input type="text" name="name" value="{{$formaggio['name']}}">
    <br>
    <label for="colore">COLORE</label>
    <input type="text" name="colore" value="{{$formaggio['colore']}}">
<br>
    <label for="stagionatura">STAGIONATURA</label>
    <input type="text" name="stagionatura" value="{{$formaggio['stagionatura']}}">
<br>
    <label for="provenienza">PROVENIENZA</label>
    <input type="text" name="provenienza" value="{{$formaggio['provenienza']}}">
<br>
    <label for="certBiologica">CERTIFICAZIONE BIOLOGICA</label>
    <input type="text" name="certBiologica" value="{{$formaggio['certBiologica']}}">
  </form>

  <input type="submit" name="submit" value="CREATE">
</div>
@endsection
