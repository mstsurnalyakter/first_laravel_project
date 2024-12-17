@extends('layout.app')

@section('content')

<div class="mt-10 w-64 p-4 border space-y-4">
    <a href="/posts" class="bg-blue-300 text-blue-700 px-3 py-2">Go Back</a>
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
<hr>
<small>Write on {{$post->created_at}}</small>
</div>


@endsection