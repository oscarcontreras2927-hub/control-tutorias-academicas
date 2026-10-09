@extends('layouts.app')

@section('title', 'Tutorías')

@section('content')

    <div class="text-center mb-4">
        <h2>Tutorías</h2>
        <p class="text-secondary">
            Consulta los horarios y administra tus tutorías académicas.
        </p>
    </div>

    <section class="row g-3">

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Horarios</h3>
                <p>Consulta los horarios disponibles para recibir tutorías.</p>

                <a href="/programar" class="btn btn-primary mt-2">
                    Consultar horarios
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Tutorías disponibles</h3>
                <p>Revisa las opciones para solicitar apoyo académico.</p>

                <a href="/programar" class="btn btn-primary mt-2">
                    Ver tutorías
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Mis tutorías</h3>
                <p>Consulta la información de tus tutorías programadas.</p>

                <a href="/pendientes" class="btn btn-primary mt-2">
                    Ver mis tutorías
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Solicitar tutoría</h3>
                <p>Selecciona un estudiante, un tutor y la fecha de la sesión.</p>

                <a href="/programar" class="btn btn-primary mt-2">
                    Solicitar tutoría
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 p-3">
                <h3>Tutorías pendientes</h3>
                <p>Consulta las tutorías que están pendientes de atención.</p>

                <a href="/pendientes" class="btn btn-primary mt-2">
                    Consultar pendientes
                </a>
            </div>
        </div>

    </section>

@endsection