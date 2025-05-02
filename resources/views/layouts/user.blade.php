<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'User Dashboard')</title>
    <link href="{{ asset('user/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.partials.topbar')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('layouts.partials.footer')
        </div>
    </div>

    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('user/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
