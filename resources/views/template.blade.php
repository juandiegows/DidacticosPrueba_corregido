<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto web</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header class="header">
        <nav class="header__links">
            <a href="/">Blog</a>
        </nav>
        <div class="links_login">
            @auth
                <a class="header__login" href="/dashboard">Dashboard</a>
                    <a class="header__login" href="logout" href="">Cerrar sesion</a>
            @else
                <a class="header__login" href="/login">Iniciar sesion</a>
                <a class="header__login" href="/sign_in" href="">Registrar</a>
            @endauth

        </div>

    </header>

    @yield('content')
</body>

</html>
