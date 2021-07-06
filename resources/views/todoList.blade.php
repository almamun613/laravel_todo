@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="/ctg.css">
@endpush

@section('content')
    <br>
    <br>
    <br>
    <br>
    <h1>Todo Manager</h1>
    <div class="row">
        <div class="col-md-12">
            @include('errors.error')
            @if(session('success'))
                <li class="alert alert-success"> {{session('success')}}</li>
            @endif
            <form class="form-group" action="{{route('todoList.save')}}" method="POST">
                {{csrf_field()}}
                <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Task Name"><br>
                <textarea class="form-control" name="task" placeholder="Details" >{{old('task')}}</textarea><br>
                <input class="btn btn-danger" type="submit" name="submit" value="Submit"><br>

            </form>

        </div>



    <div class="container row">

            @foreach($todos as $todo)
                <div class="col-sm-3" style="border: 1px solid black; padding: 10px">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $todo->name }}</h5>
                            <p class="card-text">{{ $todo->task }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach


    </div>
<div class="container row">
    <div class="col-md-offset-6">
        {{$todos->links()}}
    </div>


</div>
@endsection
