@extends('layouts.app')

@section('title', 'Panel Principal')

@section('content')

    <div class="text-center mb-4">
        <h2>Panel Principal</h2>
        <p class="text-secondary">
            Sistema de control de tutorías.
        </p>
    </div>

    <section class="row g-3">

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Programar tutoría</h3>

                <p>Próxima tutoría</p>
                <p><strong>Fecha y hora:</strong> Por definir</p>
                <p><strong>Tutor asignado:</strong> Por definir</p>

                <a href="/programar" class="btn btn-primary mt-2">
                    Programar tutoría
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Tutorías pendientes</h3>

                <p>Cantidad de tutorías</p>

                <h4>0</h4>

                <a href="/pendientes" class="btn btn-primary mt-2">
                    Consultar pendientes
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Seguimiento Académico</h3>

                <p>Progreso del estudiante</p>

                <p>Sin seguimiento registrado.</p>

                <a href="/seguimiento" class="btn btn-primary mt-2">
                    Ver seguimiento
                </a>
            </div>
        </div>

    </section>

@endsection