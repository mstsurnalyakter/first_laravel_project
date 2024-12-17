@extends('layout.app')
@section('content')
<h1>Post</h1>
@if(count($posts) > 0)
    @foreach($posts as $post)
    <div class="well">
        <h3><a class="cursor-pointer" href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Write on {{$post->created_at}}</small>

    </div>
    @endforeach
@else
    <p>No Post Found</p>
@endif
@endsection