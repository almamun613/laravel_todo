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
    <a href="{{route('todoList')}}">Go to list</a>
@endsection
