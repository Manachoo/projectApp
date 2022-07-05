<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mente Sana</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">Mente Sana</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link active">Inicio</a>
                        <a href="#" class="nav-item nav-link">Nosotros</a>
                        <a href="#" class="nav-item nav-link">Contacto</a>
                        @auth
                        <a href="" class="nav-item nav-link active">Preguntas</a>
                        @endauth
                    </div>
                    <div class="navbar-nav ms-auto">
                      @auth
                        <a href="{{ route('perfil.index') }}" class="nav-item nav-link">{{ Auth()->user()->name }}</a>
                        <a href="{{ route('logout.index') }}" class="nav-item nav-link">Cerrar Sesión</a>
                      @endauth
                      @guest
                      <a href="{{ route('register.index') }}" class="nav-item nav-link">Registrarse</a>
                      <a href="{{ route('login.index') }}" class="nav-item nav-link">Iniciar session</a>
                      @endguest
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <main>
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <h5 class="text-uppercase mb-4">OUR WORLD</h5>
    
              <ul class="list-unstyled mb-4">
                <li>
                  <a href="#!" class="footer__item">Inicio</a>
                </li>
                <li>
                  <a href="#!" class="footer__item">Nosotros</a>
                </li>
                <li>
                  <a href="#!" class="footer__item">Iniciar session</a>
                </li>
                <li>
                  <a href="#!" class="footer__item">Registrarse</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <h5 class="text-uppercase mb-4">Assistance</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!" class="footer__item">Contact us</a>
                </li>
                <li>
                  <a href="#!" class="footer__item">Size Guide</a>
                </li>
                <li>
                  <a href="#!" class="footer__item">Shipping Information</a>
                </li>
                <li>
                  <a href="#!" class="footer__item">Returns & Exchanges</a>
                </li>
                <li>
                  <a href="#!" class="footer__item">Payment</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mx-4">
              <h5 class="text-uppercase mb-4">Sign up to our newsletter</h5>
    
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2">Email address</label>
              </div>
    
              <button type="submit" class="btn btn-block">Subscribe</button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
