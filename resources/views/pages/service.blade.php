@extends('layout.app')
@section('content')
    <h1 class="text-3xl  font-bold ">{{$title}}</h1>
    @if(count($services) > 0)
    <ul>
    @foreach($services  as $service)
    <li>{{$service}}</li>
    @endforeach
</ul>
    @endif


@endsection