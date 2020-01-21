@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 jumbotron mx-auto text-center">
                    <h1 >Welcome to My Basic Laravel Website</h1>
                    <p>This My second laravel application aimed at reinforcing the various concepts so far learnt
                        The site includes a Blog application, Login or authentication and A to-do list which I included as modules and part of the entire Basic Website
                    </p>
                    <a href="/login" class="btn btn-info">Login</a><a href="/register" class="btn btn-success ml-2">Register</a>
                </div>
            </div>
        </div>
    </div>
@endsection