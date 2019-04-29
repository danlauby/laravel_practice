@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>
        <a class="btn btn-primary btn-lng" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lng" href="/register" role="button">Register</a>
    </p>
</div>
@endsection
