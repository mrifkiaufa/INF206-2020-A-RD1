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

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark grad py-1">
        <div class="container-fluid">
          <a class="navbar-brand judul" href="#">e-Zakat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    @yield('isi')

</body>
</html>
