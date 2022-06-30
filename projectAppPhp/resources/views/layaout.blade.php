<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="/Home">
                Projecto App
            </a>
            <div class="nav__menu" id="nav__menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#">
                            <i class="uil uil-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#">
                            <i class="uil uil-search-alt"></i>
                            Buscar
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#">
                            <i class="uil uil-user"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#">
                            <i class="uil uil-users-alt"></i>
                            Registrarse
                        </a>
                    </li>
                </ul>
            </div>
            <div>

            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>