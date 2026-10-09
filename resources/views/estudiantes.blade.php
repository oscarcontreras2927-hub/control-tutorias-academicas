@extends('layouts.app')

@section('title', 'Estudiantes')

@section('content')

    <div class="text-center mb-4">
        <h2>Estudiantes</h2>
        <p class="text-secondary">
            Consulta la información académica de los estudiantes.
        </p>
    </div>

    <section class="row g-3">

        <div class="col-12 col-md-6">
            <div class="card h-100 p-3">
                <h3>Lista de estudiantes</h3>

                <p>
                    Consulta la información de los estudiantes que utilizan
                    el sistema de tutorías académicas.
                </p>

                <a href="/informacion" class="btn btn-primary mt-2">
                    Buscar estudiante
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card h-100 p-3">
                <h3>Información académica</h3>

                <p>
                    Revisa los datos escolares, el promedio y el tutor asignado.
                </p>

                <a href="/informacion" class="btn btn-primary mt-2">
                    Consultar información
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card h-100 p-3">
                <h3>Seguimiento académico</h3>

                <p>
                    Consulta el progreso y las observaciones de las tutorías.
                </p>

                <a href="/seguimiento" class="btn btn-primary mt-2">
                    Ver seguimiento
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card h-100 p-3">
                <h3>Programar tutoría</h3>

                <p>
                    Accede al formulario para programar una sesión de apoyo.
                </p>

                <a href="/programar" class="btn btn-primary mt-2">
                    Programar tutoría
                </a>
            </div>
        </div>

    </section>

@endsection