@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-info btn-sm">Create post</a>
                    @if (count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Post Title</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td class="d-flex">
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default btn-sm">Edit</a>
                                
                                    {!!Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=>'POST', 'class'=>'pull-right ml-5'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger btn-sm'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No posts</p>
                    @endif
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
