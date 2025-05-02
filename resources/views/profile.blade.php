@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Profile</h1>
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    </form>
</div>
@endsection
