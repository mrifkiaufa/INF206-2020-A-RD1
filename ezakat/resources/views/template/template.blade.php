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

        h1 {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            color: rgba(32, 107, 139, 1);
        }

        p {
            font-family: 'Roboto', sans-serif;
            color: rgba(59, 134, 167, 1);
            font-size: 20px;
        }

        .navbar-toggler-buatansendiri{
            font-size:1.7rem;
            line-height:1;
            background-color:transparent;
            border:1px solid transparent;
            border-radius:.25rem;
            transition:box-shadow .15s ease-in-out
        }

    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark grad">
            <div class="container-fluid">
                <a class="navbar-brand judul" href="#">e-Zakat</a>
                <div class="navbar-nav nav-item navbar-collapse collapse">
                    <a class="nav-link navbar-nav nav-item active" style="font-size: larger;" aria-current="page" href="#">Home</a>
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" href="#">About</a>
                    <a class="nav-link navbar-nav nav-item" style="font-size: larger;" href="#">Contact</a>
                    <button class="navbar-toggler-buatansendiri" type="button" data-bs-toggle="collapse" data-bs-target="#garisTiga" style="position: absolute; right: 2%;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>

        <div class="collapse" id="garisTiga" style="position: absolute; right: 0px;">
            <div class="grad p-3">
                <a class="nav-link" style="color: white; font-size: large;" href="#">Profil</a>
                <hr style="color: white; block-size: 3px;">
                <a class="nav-link" style="color: white; font-size: large;" href="#">Dompet</a>
                <hr style="color: white; block-size: 3px;">
                <a class="nav-link" style="color: white; font-size: large;" href="#">Bayar</a>
                <hr style="color: white; block-size: 3px;">
                <a class="nav-link" style="color: white; font-size: large;" href="#">Keluar</a>
            </div>
        </div>
    </header>

    @yield('isi')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<body>
</html>
