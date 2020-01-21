@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Edit Post</h1>
            {!!Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST'])!!}
                {{Form::hidden('_method','PATCH')}}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body','Post Body')}}
                {{Form::textarea('body',$post->body,['class'=>'form-control', 'placeholder'=>'Body'])}}
            </div>
            <div class="form-group">
                {{Form::submit('Submit',['class'=>'btn btn-info'])}}
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection