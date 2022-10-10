<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Deliana Inti Sukses') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('auth_assets/style.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/full_logo_colored.png') }}">
</head>
<body>
    <div id="auth">
        <div class="hello-side">
            <div class="logo">
                <img src="{{ asset('images/full_logo_colored.png') }}" width="40%" alt="" class="logo-img">
            </div>
            <div class="overlay"></div>
            <img src="{{ asset('images/background_login.png') }}" class="background-image" alt="" srcset="">
        </div>
        <div class="box-login"></div>
    </div>
</body>
</html>
