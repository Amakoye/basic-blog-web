@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mx-auto justify-content-center">
                @include('to-do.create')
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 mx-auto card">
                @if (count($todos)>0)
                    <table class="table table striped">
                        <tr>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($todos as $todo)
                        <tr>
                        <td>{{$todo->task}}</td>
                        <td>
                            {!!Form::open(['action'=>['TodoListsController@destroy',$todo->id], 'method'=>'POST'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger btn-sm'])}}
                            {!!Form::close()!!}
                        </td>
                        </tr>
                        @endforeach
                    </table>
                @else
                    <p>No pending tasks</p>
                @endif
            </div>
        </div>
    </div>
    
@endsection
