<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/template.css">
</head>
<body class="user">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark grad">
            <div class="container-fluid">
                <a class="navbar-brand judul" href="#">e-Zakat</a>
                <div class="navbar-nav nav-item navbar-collapse collapse">
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" aria-current="page" href="{{ url('home') }}">Home</a>
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" href="{{ url('about') }}">About</a>
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" href="{{ url('contact') }}">Contact</a>

                    @guest
                    <button class="button shadow" onclick="location.href='{{ url('login') }}'" style="position: absolute; right: 2%;">Masuk</button>
                    @endguest
                    @auth
                    <button class="navbar-toggler-buatansendiri" type="button" data-bs-toggle="collapse" data-bs-target="#garisTiga" style="position: absolute; right: 2%;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @endauth
                </div>
            </div>
        </nav>

        <div class="collapse" id="garisTiga" style="position: absolute; right: 0px;">
            <div class="grad p-3">
                <a class="nav-link" style="color: white; font-size: large;" href="{{ url('profil') }}">Profil</a>
                <hr style="color: white; block-size: 3px;">
                <a class="nav-link" style="color: white; font-size: large;" href="{{ url('bayar') }}">Bayar</a>
                <hr style="color: white; block-size: 3px;">
                @if (isset(Auth::user()->penerima))
                    @if (Auth::user()->penerima > 0)
                    <a class="nav-link" style="color: white; font-size: large;" href="{{ url('dompet') }}">Dompet</a>
                    <hr style="color: white; block-size: 3px;">
                    @endif
                @endif
                <a class="nav-link" style="color: white; font-size: large;" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </header>

    @yield('isi')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    @include('sweetalert::alert')
<body>
</html>
