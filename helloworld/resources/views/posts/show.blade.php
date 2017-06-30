@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">GO BACK</a> 
<h1>{{$post->title}}</h1>
<div>
    {{$post->body}}
    </div>
    <hr>
    @if(!auth::guest())
    @if(auth::user()->id==$post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>    
   {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
       {{form::hidden('_method','DELETE')}}
    {{form::submit('Delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}
@endif
@endif
@endsection

