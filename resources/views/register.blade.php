@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="/ctg.css">
@endpush

@section('content')
    <br>
    <br>
    <br>
    <br>
    <h1>Registration</h1>

    <div class="container row">
        <div class="col-md-12">
            @include('errors.error')
            <form class="form-group" action="{{route('user.register')}}" method="POST">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="username" placeholder="Enter User Name">
                <input type="email"  class="form-control" name="email" placeholder="Enter Email Address">
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                <input type="submit"  class="btn btn-warning" name="submit" value="Register">
            </form>
        </div>
    </div>

@endsection

