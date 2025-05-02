@extends('layouts.user')

@section('title', 'Profile')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>

    <div class="row">
        <!-- Profile Info Card -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Name</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ auth()->user()->name }}</div>
                </div>
            </div>
        </div>

        <!-- Email Card -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Email Address</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ auth()->user()->email }}</div>
                </div>
            </div>
        </div>

        <!-- Phone Number Card -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Phone Number</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ auth()->user()->phone_number }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Update Form -->
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" required>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ auth()->user()->phone_number }}" required>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank if you don't want to change your password.">
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mt-3">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
