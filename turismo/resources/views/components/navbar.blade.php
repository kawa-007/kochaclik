<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <span class="navbar-text fw-bold text-white me-auto">KOCHACLICK</span>
        <div class="d-flex">
            <a class="nav-link text-white" href="/">Inicio</a>
            <a class="nav-link text-white" href="#">Contáctanos</a>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-danger ms-2">Salir</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
