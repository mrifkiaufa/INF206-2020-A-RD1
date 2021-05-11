<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@400;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap');

        .judul {
            font-family: Be Vietnam;
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 56px;
            display: flex;
            align-items: center;

            color: #FFFFFF;
        }

        .grad {
            background-image: linear-gradient(180deg, #2A9FD4 0%, #2E84EA 100%);
        }

        body {
            background-image: url(/img/bg2.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            background-position-y: 5%;
        }

        h1.artikel {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            color: rgba(32, 107, 139, 1);
        }

        h1.formulir {
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            color: rgba(47, 128, 237, 1);
        }

        p.artikel {
            font-family: 'Roboto', sans-serif;
            color: rgba(59, 134, 167, 1);
            font-size: 20px;
        }

        p.formulir {
            font-family: 'Nunito', sans-serif;
            color: rgba(60, 136, 239, 1);
            font-weight: normal;
            font-size: 22px;
        }

        input {
            background-color: rgb(62, 166, 211);;
        }

        #bor{
            border-radius: 25px;
            border: 4px solid rgba(42, 161, 211, 1);
            background-color: white;
            padding: 20px;
            width: 500px;
        }

        .navbar-toggler-buatansendiri{
            font-size:1.7rem;
            line-height:1;
            background-color:transparent;
            border:1px solid transparent;
            border-radius:.25rem;
            transition:box-shadow .15s ease-in-out
        }

        .button {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            background-color: white;
            border: none;
            color: rgba(86, 204, 242, 1);
            padding: 8px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 50px;
        }

        .button2 {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            background-color: rgba(86, 204, 242, 1);
            border: none;
            color: white;
            padding: 8px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 50px;
        }

    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark grad">
            <div class="container-fluid">
                <a class="navbar-brand judul" href="#">e-Zakat</a>
                <div class="navbar-nav nav-item navbar-collapse collapse">
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" aria-current="page" href="{{ url('home') }}">Home</a>
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" href="#">About</a>
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
                <a class="nav-link" style="color: white; font-size: large;" href="#">Profil</a>
                <hr style="color: white; block-size: 3px;">
                <a class="nav-link" style="color: white; font-size: large;" href="#">Bayar</a>
                <hr style="color: white; block-size: 3px;">
                <a class="nav-link" style="color: white; font-size: large;" href="#">Dompet</a>
                <hr style="color: white; block-size: 3px;">
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
<body>
</html>
