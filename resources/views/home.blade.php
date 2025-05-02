@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Dashboard User</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Artikel</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sesi Meditasi</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                </div>
            </div>
        </div>
    </div>
@endsection
