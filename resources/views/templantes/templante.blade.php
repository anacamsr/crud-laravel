<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud com Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/books') }}">Biblioteca de Livros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/books') }}" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/book/create') }}" class="nav-link">
                            Cadastrar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <nav class="nav navbar-dark bg-dark" style="padding: 5px 30px ;">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url('/books') }}" class="item-nav">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/book/create') }}" class="item-nav">
                    Cadastrar
                </a>
            </li>
        </ul>
    </nav> -->
    @yield('content')
</body>

</html>
<style>
    body {
        background-image: url("/images/background.jpg");
        background-repeat: repeat;
        background-size: auto;
        background-attachment: fixed;
    }

    .item-nav {
        color: black;
        font-size: 20px;
        border-bottom: none;
        text-decoration: none;
    }

    .navbar {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .navbar-nav {
        margin: 0 auto;
    }

    .navbar-brand,
    .navbar-nav,
    .d-flex {
        flex: 1;
        text-align: center;
    }

    .navbar-toggler {
        margin-left: auto;
    }
</style>