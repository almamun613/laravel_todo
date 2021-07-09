@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="/ctg.css">
@endpush

@section('content')
    <br>
    <br>
    <br>
    <br>
    <h1>Edit</h1>
    <div class="row">
        <div class="col-md-12">
            @include('errors.error')
            @if(session('success'))
                <li class="alert alert-success"> {{session('success')}}</li>
            @endif
            <form class="form-group" action="{{route('edit.save',[$task->id])}}" method="POST">
                {{csrf_field()}}
                <input type="text" class="form-control" value="{{$task->name}}" name="name" placeholder="Task Name"><br>
                <textarea class="form-control" name="task" placeholder="Details" >{{$task->task}}</textarea><br>
                <input class="btn btn-danger" type="submit" name="submit" value="Submit"><br>

            </form>

        </div>
@endsection
