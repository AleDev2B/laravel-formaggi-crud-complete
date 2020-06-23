@extends('layouts.mainLayout')

@section('content')
<div class="">
  <form action="{{route('store')}}" method="post">
    @csrf
    @method('POST')
    <label for="name">NAME</label>
    <input type="text" name="name" value="">
    <br>
    <label for="colore">COLORE</label>
    <input type="text" name="colore" value="">
<br>
    <label for="stagionatura">STAGIONATURA</label>
    <input type="text" name="stagionatura" value="">
<br>
    <label for="provenienza">PROVENIENZA</label>
    <input type="text" name="provenienza" value="">
<br>
    <label for="certBiologica">CERTIFICAZIONE BIOLOGICA</label>
    <input type="text" name="certBiologica" value="">
  </form>

  <input type="submit" name="submit" value="CREATE">
</div>
@endsection
