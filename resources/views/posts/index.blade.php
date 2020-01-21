@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <div>
                <h2>Posts</h2>
            </div>
            <div class="row">
                   
                   @if (count($posts)>0)
                        @foreach ($posts as $post)
                        <div class="col-md-10 mx-auto card mb-4">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by user</small>
                            </div>
                        @endforeach
                        {{$posts->links()}}
                   @else
                       <p>No posts</p>
                   @endif
            </div>
        </div>
    </div>
@endsection