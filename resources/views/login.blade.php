@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="/ctg.css">
@endpush

@section('content')
    <br>
    <br>
    <br>
    <br>
    <h1>Login</h1>
    <div class="container row">
        @if(session('loginError'))
            <li class="alert alert-danger">{{session('loginError')}}</li>
        @endif
        <div class="col-md-12">
            @include('errors.error')
            <form class="form-group" action="{{route('login.check')}}" method="POST">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="username" placeholder="Enter User Name">
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                <input type="submit"  class="btn btn-warning" name="submit" value="Login">
            </form>
        </div>
    </div>
@endsection
