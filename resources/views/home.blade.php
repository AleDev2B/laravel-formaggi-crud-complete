@extends('layouts.mainLayout')

@section('content')
  <div>
    <a href="{{route('create')}}"><b>CREATE RECORD</b></a>
  </div>
  <br>
  <ul>
  @foreach ($formaggi as $formaggio)
    <li> <a href="{{route('showFormaggi', $formaggio['id'])}}">{{$formaggio['name']}}</a>  </li>
  @endforeach
</ul>

@endsection
