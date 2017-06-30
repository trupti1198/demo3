@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                 <ul class="nav navbar-nav navbar-right">
             <li> <a href="/posts/create">Create Post</a></li>
            </ul>
                    You are logged in!
                    <table class="table table-striped">
                    <tr>
                     <th>Title</th>
                     <th></th>
                     <th></th>
                     </tr>
                    @foreach($posts as $post)
                        <tr>
                     <th>{{$post->title}}</th>
                     <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                     <th>   {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
       {{form::hidden('_method','DELETE')}}
    {{form::submit('Delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}</th>
                     </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
