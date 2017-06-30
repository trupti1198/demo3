@extends('layouts.app')
@section('content')
<h1>POSTS</h1>
@if(count($posts)>0)
 @foreach($posts as $post)
    <div class="well">
      <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3></a>
      <small>written on {{$post->created_at}}</small>
      </div>
  @endforeach

@else
<p>NO POSTS FOUND</p>
@endif
@endsection