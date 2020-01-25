@extends('layouts.app')
@section('content')
<div class="container">
    <a href="/posts" class="btn btn-sm btn-default">Go back</a>
    <div class="row">
            <div class="col-md-10 mx-auto card">
                <div class="card-body">
                    <h3>{{$post->title}}</h3>
                   <div>
                    <p>{{$post->body}}</p>
                   </div>
                   <hr>
                    @if (!Auth::guest())
                        @if (Auth::user()->id == $post->user_id)
                            <div class="d-flex">
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
            
                                {!!Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger ml-5'])}}
                                {!!Form::close()!!}
                            </div>
                        @endif
                        
                    @endif
                </div>
            </div>
    </div>
</div>
@endsection