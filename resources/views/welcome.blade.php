@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Welcome to Wellness Hub</h1>
    <p>Your platform for mental health and wellness.</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
</div>
@endsection
