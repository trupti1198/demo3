@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
     <h1>{{$title}}</h1>
       <p>this is the laravel application from the laravel from scratch youtube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">LOGIN</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">REGISTER</a>
   </div>
@endsection