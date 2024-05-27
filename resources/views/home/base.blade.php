<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href="{{route('home.index')}}" class="navbar-brand">RestApp</a>

            <div class="navbar-nav nav">
                <a href="{{route('home.index')}}" class="nav-link nav-item">Ana Sayfa</a>
                    @auth
                    <a href="" class="nav-link nav-item text-capitalize text-white">{{auth()->user()->name}}</a>
                    <a href="{{route('logout')}}" class="nav-link nav-item">Çıkış Yap</a>
                    @endauth

                    @guest
                    <a href="{{route('signup')}}" class="nav-link nav-item">Kayıt Ol</a>
                    <a href="{{route('login')}}" class="nav-link nav-item">Giriş Yap</a>

                    @endguest
            </div>
        </div>
    </div>

    @section('content')

    @show
</body>
</html>