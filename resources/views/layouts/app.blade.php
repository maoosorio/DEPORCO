<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('assets/fontawesome-5.8.1/css/solid.css')}}">
    <link rel="stylesheet" href="{{url('assets/fontawesome-5.8.1/css/brands.css')}}">
    <link rel="stylesheet" href="{{url('assets/fontawesome-5.8.1/css/regular.css')}}">
    <link rel="stylesheet" href="{{url('assets/fontawesome-5.8.1/css/fontawesome.min.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('css/app.blade.css')}}" id="theme-stylesheet">
</head>
<body>
    <div class="main">
        @yield('content')
    </div>

    <!-- JavaScript files-->
    <script src="{{url('assets/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/sweetalert/dist/sweetalert.min.js')}}"> </script>
    <!-- Main File-->
    <script src="{{url('js/front.js')}}"></script>

    <!-- Login & Register saved from url=(0052)https://colorlib.com/etc/regform/colorlib-regform-7/ -->
</body>
</html>
