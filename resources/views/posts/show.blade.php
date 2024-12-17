@extends('layout.app')

@section('content')
<h1>{{$post->title}}</h1>
<small>Write on {{$post->created_at}}</small>

@endsection