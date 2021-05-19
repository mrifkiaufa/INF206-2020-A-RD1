<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@400;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ovo&display=swap');

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

        h3.artikel {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            color: rgba(32, 107, 139, 1);

        }

        h4.artikel {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            color: rgba(32, 107, 139, 1);
            font-size: 15pt;

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

        p.arti {
            font-family: 'Roboto', sans-serif;
            color: black;
            font-size: 17px;
            font-weight: bold;
        }

        p.art {
            font-family: 'Roboto', sans-serif;
            color: black;
            font-size: 17px;
            line-height : 7;
            font-weight: bold;
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
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            padding: 20px;
            width: 500px;
            margin: 2rem 8rem ;
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
            background: -webkit-linear-gradient(right, #56CCF2, #1572E5);
            border: none;
            color: white;
            padding: 8px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 50px;
        }

        #card {
            background: #fbfbfb;
            border-radius: 20px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 500px;
            margin: 2rem 10rem ;
            width: 450px;
            border: 1px solid #2F80ED;
        }

        #card-bayar {
            background: #fbfbfb;
            border-radius: 10px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 400px;
            margin: 2rem 4rem ;
            width: 800px;
            border: 1px solid #2F80ED;
            margin-top: 50px;
        }

        #card-status {
            background: #F3CFCF;
            border-radius: 10px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 350px;
            margin: 2rem 4rem ;
            width: 600px;
            border: 1px solid #2F80ED;
            margin-top: 30px;
        }

        #box{
            width : 450px;
            height : 50px;
            background : #BDFFB2;
            border-radius : 5px;
            font-size : 25px;
            font-family: 'Roboto', sans-serif;
            font-weight : bold;
            margin: 2rem 4rem ;
            padding: 3px 15px;
            margin-top: 120px;
        }

        #box-dompet {
            width : 500px;
            height : 45px;
            background : #BDFFB2;
            border-radius : 5px;
            font-size : 20px;
            font-family: 'Roboto', sans-serif;
            font-weight : bold;
            padding: 5px 80px;
            margin-top: 5px;
            margin-right : 10px;
            border: 1px solid #2F80ED;
        }

        #card-contentbay {
            padding: 2px 5px;
        }

        #card-content {
            padding: 12px 40px;
        }

        #card-title {
            font-family: "Nunito", sans-serif;
            letter-spacing: 0px;
            padding-top: 8px;
            text-align: left;
            color: #2F80ED;
        }

        #submit-btn {
            background: -webkit-linear-gradient(right, #56CCF2, #1572E5);
            border: none;
            border-radius: 20px;
            cursor: pointer;
            color: white;
            font-family: "Roboto", sans-serif;
            height: 42.3px;
            margin: 13rem;
            margin-top: 30px;
            width: 153px;
        }

        #submit-btn:hover {
            box-shadow: 0px 1px 18px #56CCF2
        }

        #submit-ovo {
            background: #fbfbfb;
            border-radius: 10px;
            cursor: pointer;
            color: #4B4281;
            font-family: "Ovo", sans-serif;
            height: 40px;
            margin-top: 12px;
            width: 80px;
            border: 1px solid #4B4281;
            font-size: 18pt;
            font-weight : 800;
        }

        #submit-gopay {
            background: #209825;
            border-radius: 10px;
            cursor: pointer;
            color: #000000;
            font-family: "sans-serif", sans-serif;
            height: 40px;
            margin-top: 10px;
            margin: 1rem 4rem ;
            width: 90px;
            border: 1px solid #000000;
            font-size: 16pt;
            font-weight : 800;
        }

        /* a {
            text-decoration: none;
        } */

        /* label {
            font-family: "Nunito", sans-serif;
            font-size: 13pt;
            color: #2F80ED;
            padding: 8px 5px;
            margin-top: 10px;
        } */

        /* input{
            outline: none;
            background: #fbfbfb;
            
            border-radius: 10px;
            font-size: 16px;
            display: block;
            border: 1px solid #2F80ED;
            display : block;
            margin-bottom: 20px;
            height: 35px;
            width: 350px;
        } */
        .inputan {
            outline: none;
            background: #fbfbfb;
            padding: 6px 8px;
            border-radius: 10px;
            font-size: 16px;
            border: 1px solid #2F80ED;
            height: 35px;
            width: 350px;
            
        }

        .labelan {
            font-family: "Nunito", sans-serif;
            font-size: 13pt;
            color: #2F80ED;
            margin-top : 15px;
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
