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
    <nav class="nav navbar-dark bg-dark" style="padding: 5px 30px ;">
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
    </nav>
    @yield('content')
</body>
</html>
<style>
    .nav-item{
        margin: 10px;
    }
    .item-nav{
        color: white;
        font-size: 20px;
        border-bottom: none;
        text-decoration: none; 
    }
    
</style>