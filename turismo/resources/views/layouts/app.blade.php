<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Kochaclick')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-image: url('{{ asset('images/cristo.png') }}');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .card-evento {
            border-radius: 15px;
            background-color: #f5f5f5;
        }
        
        .carousel-item img {
            height: 400px;
            object-fit: cover;
            width: 100%;
        }

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(255, 255, 255, 0.7));
            z-index: 0;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 15px;
            position: relative;
            z-index: 1;
        }

        .form-container h3 {
            color: #00cfff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 600;
        }

        .navbar {
            background-color: #00cfff;
        }

        .navbar-brand img {
            width: 30px;
            height: auto;
        }

        .nav-link {
            color: white !important;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
            <span class="navbar-text fw-bold text-white me-auto">KOCHACLICK</span>

            <div class="d-flex">
                <a class="nav-link text-white" href="{{ url('/') }}">Inicio</a>
                <a class="nav-link text-white" href="#">Contáctanos</a>

                @auth
                    <!-- Botón cerrar sesión -->
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-white" style="cursor:pointer;">Salir</button>
                    </form>
                @endauth
                @guest
                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container d-flex align-items-center justify-content-start" style="min-height: 90vh; position: relative; z-index: 1;">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
