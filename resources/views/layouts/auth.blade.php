<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Deliana Inti Sukses</title>
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
            <img src="{{ asset('images/full_logo_colored.png') }}" width="40%" alt="" class="logo-img">
            <div class="overlay"></div>
            <img src="{{ asset('images/background_login.png') }}" class="background-image" alt="" srcset="">
        </div>
        <div class="box-login">
            <div class="title">Masuk</div>
            <div class="sub-title">Silahkan masukkan akun terlebih dahulu</div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email...">
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Password...">
                </div>

                <button>Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
