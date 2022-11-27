@extends('main')


@section('main-content')

    <h1>{{$name}}</h1>
    <h4>{{$val8}}</h4>

    @if (20 > $val1)
        <h1> 20 มากกว่า {{$val1}}</h1>
    @else
        <h1> 20 น้อยกว่า {{$val1}}</h1>
    @endif

@stop
