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
<body class="admin">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark grad">
            <div class="container-fluid">
                <a class="navbar-brand judul" href="#">e-Zakat</a>
                <div class="navbar-nav nav-item navbar-collapse collapse">
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" aria-current="page" href="#">Kelola</a>
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" href="{{ url('pemberi') }}">Pemberi</a>
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" href="#">Penerima</a>
                </div>
            </div>
                <input type="image" src="/img/logout.png" alt="#" class="tombol-logout shadow" type="button" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>

    </header>

    @yield('isi')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    @include('sweetalert::alert')
<body>
</html>
