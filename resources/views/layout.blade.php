<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @yield('styles')
    <title>@yield('title')</title>
</head>

<body>
    <!-- ================================================== start navbar =============================================== -->

    <x-navbar>
        active
    </x-navbar>
    @yield('content')


    <!-- ================================================== start script links ====================================== -->
    <script src="{{ asset('assets/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
