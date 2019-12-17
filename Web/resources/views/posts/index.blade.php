@extends('layouts.app')

@section('content')
<h1> Post</h1>
@if(count($posts) > 0)
@foreach($posts as $post)
    <div class="well">
    <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
    <small> Written on {{$post->created_at}}</small>
    
    @endforeach
    @else
      <p> No post</p>

      @endif

    @endsection