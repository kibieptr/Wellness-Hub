<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Wellness Hub</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet"> <!-- Link to your Rocker Admin CSS -->
</head>
<body>
    <div class="wrapper">
        @include('layouts.admin.sidebar') <!-- Sidebar -->
        <div class="content-wrapper">
            @include('layouts.admin.header') <!-- Admin Header -->
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script> <!-- Link to your Rocker Admin JS -->
</body>
</html>
