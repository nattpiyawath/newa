@extends('template')
@section('title','About Us')
@section('content')
    <h1>About Us</h1>
    <p>This is about us description This is about us 
      <b> {{isset($name)?$name:"No Name"}} </b> descriptionThis is about us description</p>
      <br>
    @if(count($num))
        @foreach ($num as $value)
            {{$value}} <br>
        @endforeach
    @endif

@endsection