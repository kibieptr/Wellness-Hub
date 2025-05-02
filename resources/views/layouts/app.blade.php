<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellness Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('user/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/js/sb-admin-2.min.js') }}"></script>
</head>
<body id="page-top">

    <!-- Sidebar -->
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            
            <!-- Topbar -->
            @include('layouts.partials.topbar')

            <!-- Page Content -->
            <div class="container-fluid">
                @yield('content') <!-- This is where profile content is injected -->
            </div>

        </div>
        
        <!-- Footer -->
        @include('layouts.partials.footer')

    </div>

</body>
</html>
