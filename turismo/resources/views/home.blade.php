@extends('layouts.app')

@section('title', 'Kochaclick - Inicio')

@section('content')
<div class="w-100">
    <!-- Carrusel con navegación -->
    <div id="carouselEventos" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/corso.jpg') }}" class="d-block w-100" alt="Corso de Corsos">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/anime.jpeg') }}" class="d-block w-100" alt="Anime">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Urkupina.jpg') }}" class="d-block w-100" alt="Urkupiña">
            </div>
        </div>

        <!-- Botones prev / next -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselEventos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselEventos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Eventos -->
    <div class="container mt-4">
        <h3 class="mb-4">Eventos</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Evento 1 -->
            <div class="col">
                <div class="card card-evento p-3 h-100">
                    <img src="{{ asset('images/corso1.jpg') }}" class="card-img-top" alt="Corso de Corsos">
                    <div class="card-body">
                        <h5 class="card-title">Corso de Corsos</h5>
                        <p class="card-text">Bs50–150</p>
                        <p class="card-text">08/03/2025</p>
                    </div>
                </div>
            </div>

            <!-- Evento 2 -->
            <div class="col">
                <div class="card card-evento p-3 h-100">
                    <img src="{{ asset('images/urkupina.jpg') }}" class="card-img-top" alt="Urkupiña">
                    <div class="card-body">
                        <h5 class="card-title">Urkupiña</h5>
                        <p class="card-text">Bs50–150</p>
                        <p class="card-text">15/08/2025</p>
                    </div>
                </div>
            </div>

            <!-- Evento 3 -->
            <div class="col">
                <div class="card card-evento p-3 h-100">
                    <img src="{{ asset('images/entrada.jpg') }}" class="card-img-top" alt="Entrada Universitaria">
                    <div class="card-body">
                        <h5 class="card-title">Entrada Universitaria</h5>
                        <p class="card-text">Bs50–150</p>
                        <p class="card-text">29/11/2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
