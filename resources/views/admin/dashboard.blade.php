<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome {{ Auth::user()->name }} </title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
<header class="header">
    <nav class="header__links">
        <div class="start">
            <a class="links" href="/dashboard">Dashboard</a>
            <div class="links_start">
                @if (Auth::user()->role_id == 1)
                    <a class="links" href="/dashboard/user"> Activar/suspender usuario</a>
                @endif

                <a class="links">Agregar blog</a>
            </div>
        </div>

        <div class="links_end">

            <a class="links"> {{ Auth::user()->email }}</a>

            <a class="links" href="logout">Cerrar sesion</a>
        </div>
    </nav>


</header>
    @yield('content_dashboard')
</body>
